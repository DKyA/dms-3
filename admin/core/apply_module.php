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
            print("Můžu pokračovat, jsem lineární.");
            separate();
        }
        elseif (Nestor::$nestor_id == $module -> return_affiliation()) {
            print("Můžu pokračovat, jsem lineární.");
            separate();
        }
        else {
            return;
        }

        $data = $module -> return_data();

        $placeholder = '<?php
apply_modules($modules);
?>';


        if ($module -> module_nestable) {
            Nestor::add_nestor();
            create_and_open("{$path['components']}modules/_{$module -> module_type}.php", $placeholder);
            array_shift($modules);
            continue;
        }

        create_and_open("{$path['html']}components/_{$module -> module_type}.html", $placeholder);
        array_shift($modules);

        if ($infinite_loop > 10) {
            echo 'Nekonečný cyklus zastaven.';
            break;
        }
        $infinite_loop++;

    }

}

// while cyklus... atd... Asi...  A popovat. Vždycky se zanořím do scopu, což bude fce. V nejhorším případě se vrátím.