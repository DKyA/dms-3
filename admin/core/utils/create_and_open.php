<?php

function create_and_open($dest) {
    global $path, $text;

    if (!file_exists($dest)) {
        $file = fopen($dest, 'w');
        fclose($file);
    }
    require $dest;
}

function create_and_open_placeholder($dest, $content) {
    global $path, $text;

    if (!file_exists($dest)) {
        $file = fopen($dest, 'w');
        if ($content) {
            fwrite($file, $content);
        }
        fclose($file);
    }
    require $dest;
    open_template($modules, $arrangement);
}


function create_and_open_modules($dest, $content, $layout, $module) {
    global $path, $text;

    $data = $module -> return_data();

    $locals = new Locals($module);
    $attributes = $locals->attributes;

    if (!file_exists($dest)) {
        $file = fopen($dest, 'w');
        if ($content) {
            fwrite($file, $content);
        }
        fclose($file);
    }

    require $dest;
}
