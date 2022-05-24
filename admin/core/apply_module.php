<?php

/*

-- Jak tohle funguje? --

    - Teď jsem to dopsal a už si nejsem úplně 100% jistej. Ale zkusím vysvětlit
    - Tahle funkce se volá z FE nastavování. Projde všechny prvky, které se nachází v aktuálním pořadníku a vytiskne je
    - Je to nepřímá rekurze -> vyloženě se tady jde po prvcích.
    - Potenciální problém -> skákání o více řádů mezi sebou. Ale ani to by snad neměl být problém... Snad...

*/


class Layout {
    public $properties;

    function __construct($modules, $use_db) {
        if ($use_db) {
            return;
        }

        $this -> properties = [];

    }

    function pop_modules() {
        array_shift($this -> modules);
    }

    function return_given_module($n) {
        return $this -> modules[$n];
    }

    function return_module_length() {
        return count($this -> modules);
    }

}


function apply_modules(object $layout) {
    global $path;

}


