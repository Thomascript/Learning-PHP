<?php

$bebidas = [
    'Vodka' => [
      'origem' => 'Russia',
      'teor' => '70%'
    ],


    'Caipirinha' => [
      'origem' => 'Brasil',
      'teor' => '50%'
    ],

    'Sminoff' => [
      'origem' => 'Russia',
      'teor' => '30%'
    ]
];


foreach ($bebidas as $classificacaoBebida) {
    echo $classificacaoBebida['origem']. PHP_EOL;

}