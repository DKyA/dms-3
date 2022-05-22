<?php

class Locals {
    private $module;
    public $attributes;
    function __construct($module) {
        $this -> module = $module;
        $this -> process();
    }

    function process() {
        // tady se budou autodělit nejčastější moduly... Asi procyklit a zaswitchovat...
        // Už vidím, že zítra zase přijdu totálně naštvanej... :()
    }

}