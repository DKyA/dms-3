<?php

class Locals {
    private $module;
    public array $attributes;

    function __construct($module) {

        $this -> module = $module;

        $values = [
            'id', 'type', 'placeholder', 'level', 'style', 'target', 'required', 'class', 'rel',
        ];

        foreach($values as $k) {
            $this -> attributes[$k] = '';
        }

        $this -> process();

    }

    function process() {

        foreach (($this -> module -> attributes['attributes']) as $k => $a) {

            $this -> attributes[$k] = (function($k, $v) {

                switch($k) {
                    case 'id':
                        return "{$this -> module -> module_type}-$v";
                    case 'required':
                        if ($v) return $k;
                        return;
                    case 'type':
                        $this -> attributes['class'] = "--{$v}";
                        return "{$k}='{$v}'";
                    case 'level':
                        if ($v) return $v;
                        return 1;
                    case 'style' | 'class' | 'rel':
                        return $v;
                    default:
                        return "{$k}='{$v}'";
                }

            })($k, $a);

        }

    }

}
