<?php

$dest = $path['components'] . "specials/$PI->ref.php";
$content = (function() {
    global $path;
    fopen($path['docs'] . 'specials.txt', 'r');
})();

create_and_open_placeholder($dest, $content);



function open_template($modules, $template_name) {

    global $path;

    // Okej, jiná idea => tentokrát udělám strom, budu procházet jednotlivé výšky v jednotlivých větvích.
    // K tomu potřebuju hned zezačátku poslat do hry všechno, co dostanu z inputu.

    // I Guess že začnu s novým projektem a použiju tam věci odsud...

    $layout = new Layout($modules, false);

    // layout použit v require věci.
    require $path['components'] . "templates/$template_name.php";

}