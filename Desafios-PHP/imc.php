<?php

$altura = 1.70;
$peso = 50;
$calculo = $peso / ($altura * $altura);

echo "---------------------------------------" . PHP_EOL;
echo "================ IMC ==================" . PHP_EOL;
echo "---------------------------------------" . PHP_EOL;

if($calculo <= 18.5) {
    echo $calculo . PHP_EOL;
    echo "IMC ABAIXO DA MÉDIA!";
} else if($calculo >= 18.6 && $calculo <= 24.9) {
    echo $calculo . PHP_EOL;
    echo "IMC NORMAL" . PHP_EOL;
} else if($calculo >= 25.0 && $calculo <= 29.9) {
    echo $calculo . PHP_EOL;
    echo "PRÉ-OBESIDADE" . PHP_EOL;
} else if($calculo >= 30.0 && $calculo <= 39.9) {
    echo $calculo . PHP_EOL;
    echo "OBESIDADE GRAU II" . PHP_EOL;
} else {
    echo "$calculo" . PHP_EOL;
    echo "OBESIDADE GRAU III";
}