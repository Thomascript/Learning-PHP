<?php

$contasCorrente = [
    '123.543.220-60' => [
        'titular' => 'Thomas',
        'saldo' => 1000
    ],

    '123.540.223-43' => [
        'titular' => 'Maria',
        'saldo' => 40000
    ],

    '320.123.454-20' => [
        'titular' => 'Kaio',
        'saldo' => 4000
    ]

];


foreach ($contasCorrente as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}