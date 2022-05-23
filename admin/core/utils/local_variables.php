<?php

class Locals {
    private $module;
    public array $attributes;
    function __construct($module) {
        $this->module = $module;
        $this->process();
    }

    function process() {
        // tady se budou autodělit nejčastější moduly... Asi procyklit a zaswitchovat...
        // Už vidím, že zítra zase přijdu totálně naštvanej... :()

        print_r($this -> module -> attributes['attributes']);

        foreach (($this -> module -> attributes['attributes']) as $k => $a) {


            // Neudělat switchem, ale nějakou mega rekurzí / nečím podobným, ať to vrací False hodnotu


            // switch ($k) {
            //     case 'id':
            //         $this -> attributes[$k] = "{$this -> module -> attributes['attributes']['type']}-$a";
            //         break;
            //     case 'type':
            //         $this -> attributes[$k] = "type='{$a}'";
            //         $this -> attributes['class'] = ""
            //         break;
            //     // Všechno řádkové spadne do placeholderu...
            // }

        }

    }
}
