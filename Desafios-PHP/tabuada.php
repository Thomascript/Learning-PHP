<?php

echo "----------------------------------------------" . PHP_EOL;
echo "================== TABUADA ===================" . PHP_EOL;
echo "----------------------------------------------" . PHP_EOL;

for($multiplicador = 1; $multiplicador <= 9; $multiplicador++) {
    $base = 8;
    $calculo = $base * $multiplicador;
    echo "* $base X $multiplicador = $calculo" . PHP_EOL;
}