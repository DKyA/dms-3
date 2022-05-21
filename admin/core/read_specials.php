<?php

class BaseLayout {

    public array $modules;

    function __construct($module){
        if (is_array($module)) {
            array_merge($this -> modules, $module);
            return;
        }
        array_push($this -> modules, $module);
    }

    function add_element($module) {
        array_push($this -> modules, $module);
    }

    // Pak asi ještě nějaký přikládací foreach, nebo něco podobného
    // Zároveň by asi bylo dobrý mít uložené, jestli daný modul může být rozšiřitelný
    // Obecně bych ty moduly docela rád rozdělil právě na rozdělitelné / nedělitelné.
    // Podle toho se budu odkazovat buď do components, nebo do html.
    // Tohle může být cesta.
    // Nicméně tím, že se bavíme o vlastnostech, tak v podstatě říkáme, že bude potřeba zanořit objekt...

}

$dest = $path['components'] . "specials/$PI->ref.php";
if (!file_exists($dest)) {
    $file = fopen($dest, 'w');
    fclose($file); // Napíšu sem ještě pak asi základní definici basic templatu.
}
require $dest;