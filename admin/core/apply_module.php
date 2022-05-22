<?php

/*

-- Jak tohle funguje? --

    - Teď jsem to dopsal a už si nejsem úplně 100% jistej. Ale zkusím vysvětlit
    - Tahle funkce se volá z FE nastavování. Projde všechny prvky, které se nachází v aktuálním pořadníku a vytiskne je
    - Je to nepřímá rekurze -> vyloženě se tady jde po prvcích.
    - Potenciální problém -> skákání o více řádů mezi sebou. Ale ani to by snad neměl být problém... Snad...

*/


class Layout {
    public $modules;

    function __construct($modules, $use_db) {
        if ($use_db) {
            return;
        }

        $this -> modules = [];

        foreach ($modules as $module) {
            $head = array_shift($module);
            array_push($this -> modules, new AnonymousModule($head, $module[0]));
        }

    }

    function pop_modules() {
        array_shift($this -> modules);
    }

    function return_given_module($n) {
        return $this -> modules[$n];
    }

    function return_module_length() {
        return count($this -> modules);
    }

}


function apply_modules(object $layout) {
    global $path;

    $infinite_loop = 0;
    // Testovací zarážka, nechám jí tady i do budoucnosti, kdyby tu byla nějaká schovaná chyba.

    while ($layout -> return_module_length() > 0) {
        $n = Nestor::$nestor_id + 1;
        // Tohle $n slouží hlídání indexů, jestli už nejsem moc daleko.
        // Nestor jako takový slouží k uchování hodnoty posledního indexu. n je pak délka.

        if ($n == $layout -> return_module_length()) {
            return;
        }

        // Tohle je zarážka, abych nechodil moc daleko.

        $module = $layout -> return_given_module($n);
        // Inicializace aktuálního modulu.

        // Blok, který rozhodne, jestli ještě patřím do skopu, nebo ne. Potom breakne.
        if (Nestor::$nestor_id > $module -> return_affiliation()) {
            Nestor::subtract_nestor();
            return;
        }


        if ($module -> module_nestable) {
            Nestor::add_nestor();
            $folder = 'modules';
            $placeholder = '<div><?=$data[0]?>
    <?php
        apply_modules($layout);
    ?>
</div>';
        }
        else {
            $placeholder = '<div><?=$data[0]?></div>';
            $folder = 'submodules';
        }

        $dest = "{$path['components']}{$folder}/_{$module -> module_type}.php";
        create_and_open_modules($dest, $placeholder, $layout, $module);
        $layout -> pop_modules();

        // Zase hlídač nekonečného cyklu. V tuto chvíli je podmínka nastavená na sto. V budoucnu je třeba odstranit.
        if ($infinite_loop > 100) {
            echo 'Nekonečný cyklus zastaven.';
            break;
        }
        $infinite_loop++;

    }

}

