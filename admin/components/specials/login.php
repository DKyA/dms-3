<?php
// Tohle už je vyloženě template dané stránky. Zajímá mě jen tělíčko, zbytek umím.
// Napadá mě, že by to mohlo dělat 2 věci...
// 1. Vyhodit nějaký základní template
// 2. Zavolat dané komponenty. Tady si můžu ozkoušet mechanismus, vzhledem k tomu, že sem není potřeba plést databázi.

// Tohle pak vezmu a hodím to jako template do stvořitele.

class Layout extends BaseLayout {
    // Už tady je constructor...
}

$modules = [
    new AnonymousModule('headline', ['data' => ['Testovací text'], 'level' => 3]), 
    new AnonymousModule('form', ['data' => ['Přihlašovací formulář'], 'id' => 0]),
    new AnonymousModule('input', ['data' => ['Testovací text'], 'type' => 'text', 'affiliation' => 0]), 
    new AnonymousModule('input', ['data' => ['Testovací text'], 'type' => 'password', 'affiliation' => 0]), 
    new AnonymousModule('button', ['data' => ['Testovací text'], 'type' => 'submit', 'affiliation' => 0])
];


require $path['components'] . 'templates/blob_middle.php';
