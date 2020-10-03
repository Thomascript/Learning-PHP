<?php

//Arrays associativos
$conta1 = [
    'titular' => 'Thomas',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 4000
];

$conta3 = [
    'titular' => 'Kaio',
    'saldo' => 400
];

$contas = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contas); $i++){
    echo $contas[$i] ['titular'] . PHP_EOL;
}