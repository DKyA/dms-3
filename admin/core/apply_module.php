<?php
// Tady se vyloženě budou aplikovat moduly, takže připravovat k tisku.
// Ideálně tady připravit proměnnou $data, ...
// Jsem si docela jistej, že se tohle celý ještě bude měnit s tím, jak budu integrovat nestable věci.
function apply_modules(array $modules) {
    global $path;

    foreach($modules as $module) {
        // print_r($module);
        $data = $module -> return_data();

        if ($module -> module_nestable) {
            create_and_open("{$path['components']}modules/_{$module -> module_type}.php");
            continue;
        }

        create_and_open("{$path['html']}components/_{$module -> module_type}.html");

        print_r($module);
        separate();

    }

}

// while cyklus... atd... Asi... 