<?php

$dest = $path['components'] . "specials/$PI->ref.php";
if (!file_exists($dest)) {
    $file = fopen($dest, 'w');
    fclose($file); // Napíšu sem ještě pak asi základní definici basic templatu.
}
require $dest;