<?php

$dest = $path['components'] . "specials/$PI->ref.php";
$content = (function() {
    global $path;
    fopen($path['docs'] . 'specials.txt', 'r');
})();

create_and_open_placeholder($dest, $content);



function open_template($modules, $template_name) {

    global $path;

    $layout = new Layout($modules, false);
    require $path['components'] . "templates/$template_name.php";

}