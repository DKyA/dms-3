<?php

function create_and_open($dest, $content) {
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