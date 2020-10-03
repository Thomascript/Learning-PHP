<?php


$listaAnimes = [
    '34030203' => [
        'Anime' => 'Shigatsu Wa Kimi No Uso',
        'Genero' => 'Romance',
        'Ano' => 2014
    ],

    '50303404' => [
        'Anime' => 'Clannad',
        'Genero' => 'Romance',
        'Ano' => 2004
    ],

    '49493322' => [
        'Anime' => 'Yuyu Hakusho',
        'Genero' => 'Acao',
        'Ano' => 1990
    ],
];

foreach ($listaAnimes as $catalogo => $anime) {
    echo $catalogo . " | " . " | " . $anime['Anime'] . " | " . $anime['Ano'] . PHP_EOL;
}