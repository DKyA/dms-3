<?php

function create_and_open($dest) {
    global $path;

    if (!file_exists($dest)) {
        $file = fopen($dest, 'w');
        fclose($file);
    }
    require $dest;
}

function create_and_open_placeholder($dest, $content) {
    global $path;

    if (!file_exists($dest)) {
        $file = fopen($dest, 'w');
        if ($content) {
            fwrite($file, $content);
        }
        fclose($file);
    }
    require $dest;
}


function create_and_open_modules($dest, $content, $layout) {
    global $path;

    if (!file_exists($dest)) {
        $file = fopen($dest, 'w');
        if ($content) {
            fwrite($file, $content);
        }
        fclose($file);
    }
    require $dest;
}
