<?php
// Tady se vyloženě budou aplikovat moduly, takže připravovat k tisku.
// Ideálně tady připravit proměnnou $data, ...
// Jsem si docela jistej, že se tohle celý ještě bude měnit s tím, jak budu integrovat nestable věci.
function apply_modules(array $modules) {
    global $path;

    $infinite_loop = 0;

    while (count($modules) > 0) {

        $module = $modules[0];

        if (Nestor::$nestor_id == -1 && $module -> module_nestable != '') {

        }
        elseif (Nestor::$nestor_id == $module -> return_affiliation()) {

        }
        else {
            return;
        }

        $data = $module -> return_data();

        $placeholder = '<div>Komponenta.
        <?php
apply_modules($modules);
?>
</div>';


// Problém, který aktuálně řeším:
// Potřebuju kvůli matematice zničit přechozí modul už na začátku, zároveň ale potřebuju požít jeho obsah
// |
// v


        if ($module -> module_nestable) {
            Nestor::add_nestor();
            create_and_open_modules("{$path['components']}modules/_{$module -> module_type}.php", $placeholder, $modules);
            array_shift($modules);
            continue;
        }

        create_and_open_modules("{$path['html']}components/_{$module -> module_type}.html", '<p>Subkomponenta</p>', $modules);
        array_shift($modules);

        if ($infinite_loop > 10) {
            echo 'Nekonečný cyklus zastaven.';
            break;
        }
        $infinite_loop++;

    }

}

// while cyklus... atd... Asi...  A popovat. Vždycky se zanořím do scopu, což bude fce. V nejhorším případě se vrátím.