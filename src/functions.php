<?php

const NAMES = [
    'Lena', 'Vadim', 'Dima', 'Sergey', 'Andrey'
];

function NewUser()
{
    $user = [
        'name' => NAMES[array_rand(NAMES)],
        'age' => mt-rand(18,45)
    ];
    return $user;
}