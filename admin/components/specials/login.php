<?php
// Unikátní jméno

$modules = [
    'login_form' => [
        'type' => 'form',
        'data' => ["$text[0] │ Přihlášení"],
        'attributes' => ['type' => 'login'],
        'affiliated' => [
                'input' => [
                    'data' => ['Uživatelské jméno'],
                    'attributes' => ['type' => 'text', 'placeholder' => 'Přihlašovací jméno', 'required' => True], 
                ],
                'input' => [
                    'data' => ['Heslo'], 
                    'attributes' => ['type' => 'password', 'placeholder' => 'Vaše heslo', 'required' => True], 
                ],
                'button' => [
                    'data' => ['Přihlásit'], 
                    'attributes' => ['type' => 'submit'], 
                ],
                'link' => [
                    'data' => ['Zapomenuté heslo?'],
                    'attributes' => ['href' => '#', 'type' => 'footnote'],
                ]
        ]
    ],

    'test_form' => [
        'type' => 'form',
        'data' => ["$text[0] │ Přihlášení"],
        'attributes' => ['type' => 'login'],
        'affiliated' => [
            'input' => [
                'data' => ['Uživatelské jméno'],
                'attributes' => ['type' => 'text', 'placeholder' => 'Přihlašovací jméno', 'required' => True], 
            ],
            'input' => [
                'data' => ['Heslo'], 
                'attributes' => ['type' => 'password', 'placeholder' => 'Vaše heslo', 'required' => True], 
            ],
            'button' => [
                'data' => ['Přihlásit'], 
                'attributes' => ['type' => 'submit'], 
            ],
            'link' => [
                'data' => ['Zapomenuté heslo?'],
                'attributes' => ['href' => '#', 'type' => 'footnote'],
            ]
        ]
    ]
];

$arrangement = 'blob_middle';
