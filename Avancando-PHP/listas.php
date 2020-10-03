<?php

$idades = [10, 20, 12, 44, 50];

unset($idades[4]);

list($idadeJoao, $idadeMaria, $idadePedro) = $idades;

foreach ($idades as $idade) {
    echo $idade . PHP_EOL;

}
