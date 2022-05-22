<?php

class FatherModule {

    public $module_type;
    public $module_nestable;
    public $module;

    // Properties of a module:
    public $attributes;

    function __construct($module_type) {
        $this -> module_type = $module_type;

        global $db;
        $statement = $db -> prepare("SELECT * FROM component_list WHERE desc_db = ?");
        $statement -> execute(["c_$module_type"]);
        $this -> module = $statement -> fetch(PDO::FETCH_ASSOC);
        $this -> module_nestable = $this -> module['nestable'];
    }

}

class Module extends FatherModule {
    // Tohle je tady pouze pro DB base moduly.
}

class AnonymousModule extends FatherModule {
    // Tohle je tady pro anonymous moduly...

    function __construct($module_type, $attributes) {
        $this -> module_type = $module_type;

        global $db;
        $statement = $db -> prepare("SELECT * FROM component_list WHERE desc_db = ?");
        $statement -> execute(["c_$module_type"]);
        $this -> module = $statement -> fetch(PDO::FETCH_ASSOC);
        $this -> module_nestable = $this -> module['nestable'];

        // Tohle je ta změna.
        $this -> attributes = $attributes;

    }

    function return_data() {

        if (isset($this -> attributes['data'])) {
            return $this -> attributes['data'];
        }
        return;

    }

    function return_depth() {

        if (!isset($this -> attributes['depth'])) return;
        return $this -> attributes['depth'];

    }

    function return_affiliation() {
        if (!isset($this -> attributes['affiliation'])) return -1;
        return $this -> attributes['affiliation'];
    }

    function return_attributes() {
        if (!isset($this -> attributes['attributes'])) return;
        return $this -> attributes['attributes'];
    }

}