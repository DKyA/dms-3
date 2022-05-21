<?php

function utils($dist, $file) {
    global $path;
    $dir = $path[$dist] . "$file/";
    if (is_dir($dir)) {
        if($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false){
                if ($file != '.' && $file != '..' && $file != 'README.md') {
                    require $dir . $file;
                }
            }
        }
    }
}
utils('core', 'utils');