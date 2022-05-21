<?php

// Tahle fce udělá to, že se podívá na informace o stránce a následně začne přidávat potřebné komponenty.
// Takhle budu chtít přidat časem navigaci, vrchní lištu. Tak jako tak se přidá tělíčko.
// Zároveň bych tady chtěl časem spouštět přidávací smyčku. I když to možná nechám na další soubory
// Ví vil sí.

if ($PI -> in_nav) {
    require $path['modules'] . 'nav.php';
}

if ($PI -> infobar) {
    require $path['modules'] . 'infobar.php';
}

if (!$PI -> special) {
    require $path['core'] . 'read_components.php';
} 
else {
    require $path['core'] . 'read_specials.php';
}