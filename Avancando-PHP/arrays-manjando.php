<?php

//Criando vetor, add elementos e percorrendo ele com um for melhorado

$vetor = [10, 30, 20, 44, 23, 99, 94,33];

$vetor[] = 100;

for($i = 0; $i < count($vetor); $i++) { //count assume o vetor
    echo $vetor[$i] . PHP_EOL;
}

//usa-se o unset() para remover um elemento passando seu índice