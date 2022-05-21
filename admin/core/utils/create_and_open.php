<?php

function create_and_open($dest) {
    global $path;

    if (!file_exists($dest)) {
        $file = fopen($dest, 'w');
        fclose($file);
    }
    require $dest;
}