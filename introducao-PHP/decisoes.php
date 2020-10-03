<?php

echo "----------------------------------------------------" . PHP_EOL;
echo "-------------- PORTÃO COM SEGURANÇA ----------------" . PHP_EOL;
echo "----------------------------------------------------" . PHP_EOL;

$nomeLista = true;
$idade = 15;
$pessoasEntrando = 2;

echo "Só será permitida a entrada caso seja de maior" . PHP_EOL;
echo "Caso seja maior de 16 e menor de 18, tem que ter um acompanhante" . PHP_EOL;
echo "Abaixo de 15 não pode entrar em nenhuma maneira" . PHP_EOL;

if ($nomeLista == true && $idade > 18 && $pessoasEntrando > 1) {
    echo "----------------" . PHP_EOL;
    echo "BEM VINDO A FESTA DA SURUBA";
} else if ($nomeLista == true && $idade <= 17 && $pessoasEntrando == 1) {
    echo "----------------" . PHP_EOL;
    echo "Apesar de sua idade permitir, é necessário um acompanhante" . PHP_EOL;
} else if ($nomeLista == true && $idade >= 16 && $pessoasEntrando >= 2) {
    echo "----------------" . PHP_EOL;
    echo "Você possui $idade anos" . PHP_EOL;
    echo "Você possui $pessoasEntrando acompanhantes" . PHP_EOL;
    echo "VOCÊ PODE ENTRAR NA FESTA!" . PHP_EOL;
} else {
    echo "Você não pode entrar na festa, sentimos muito" . PHP_EOL;
    echo "Pois sua idade é de $idade e não é permitido, mesmo se tivesse um acompanhante";
}

