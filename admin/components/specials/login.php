<?php
// Tohle už je vyloženě template dané stránky. Zajímá mě jen tělíčko, zbytek umím.
// Napadá mě, že by to mohlo dělat 2 věci...
// 1. Vyhodit nějaký základní template
// 2. Zavolat dané komponenty. Tady si můžu ozkoušet mechanismus, vzhledem k tomu, že sem není potřeba plést databázi.

// Tohle pak vezmu a hodím to jako template do stvořitele.


$modules = [
    ['headline', ['data' => ['Testovací text'], 'level' => 3]], 
    ['form', ['data' => ['Přihlašovací formulář'], 'depth' => 1]],
    ['input', ['data' => ['Testovací text'], 'type' => 'text', 'affiliation' => 1]], 
    ['input', ['data' => ['Testovací text'], 'type' => 'password', 'affiliation' => 1]], 
    ['button', ['data' => ['Testovací text'], 'type' => 'submit', 'affiliation' => 1]],
    ['headline', ['data' => ['Testovací text na konci'], 'level' => 3]], 
    ['form', ['data' => ['Přihlašovací formulář'], 'depth' => 1]],
    ['input', ['data' => ['Testovací text'], 'type' => 'text', 'affiliation' => 1]], 
    ['input', ['data' => ['Testovací text'], 'type' => 'password', 'affiliation' => 1]], 
    ['button', ['data' => ['Testovací text'], 'type' => 'submit', 'affiliation' => 1]],
    ['form', ['data' => ['Přihlašovací formulář'], 'depth' => 2, 'affiliation' => 1]],
    ['input', ['data' => ['Testovací text'], 'type' => 'text', 'affiliation' => 2]], 
    ['input', ['data' => ['Testovací text'], 'type' => 'password', 'affiliation' => 2]], 
    ['button', ['data' => ['Testovací text'], 'type' => 'submit', 'affiliation' => 2]],
    ['headline', ['data' => ['Testovací text na konci'], 'level' => 3]], 
];

$layout = new Layout($modules, false);

require $path['components'] . 'templates/blob_middle.php';
