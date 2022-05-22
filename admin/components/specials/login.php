<?php
// Tohle už je vyloženě template dané stránky. Zajímá mě jen tělíčko, zbytek umím.
// Napadá mě, že by to mohlo dělat 2 věci...
// 1. Vyhodit nějaký základní template
// 2. Zavolat dané komponenty. Tady si můžu ozkoušet mechanismus, vzhledem k tomu, že sem není potřeba plést databázi.

// Tohle pak vezmu a hodím to jako template do stvořitele.

$modules = [
    [
        'form', [
            'data' => ["$text[0] │ Přihlášení"],
            'attributes' => ['type' => 'login'],
            'depth' => 1
        ]
    ],
    [
        'input', [
            'data' => ['Uživatelské jméno'],
            'attributes' => ['type' => 'text', 'placeholder' => 'Přihlašovací jméno', 'required' => True], 
            'affiliation' => 1
        ]
    ], 
    [
        'input', [
            'data' => ['Heslo'], 
            'attributes' => ['type' => 'password', 'placeholder' => 'Vaše heslo', 'required' => True], 
            'affiliation' => 1
        ]
    ], 
    [
        'button', [
            'data' => ['Přihlásit'], 
            'attributes' => ['type' => 'submit'], 
            'affiliation' => 1
        ]
    ],
    [
        'link', [
            'data' => ['Zapomenuté heslo?'],
            'attributes' => ['href' => '#', 'type' => 'footnote'],
            'affiliation' => 1
        ]
    ],
];

open_template($modules, 'blob_middle');