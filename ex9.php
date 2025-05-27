<?php

$num = readline("Digite o Primeiro número: ");
$num2 = readline("Digite o Segundo número: ");

function somaSubtracaoMultiplicarDividir($num, $num2){ 
    $soma = $num + $num2;
    $subtracao = $num - $num2;
    $multiplicacao = $num * $num2;
    $divisao = $num / $num2;

    return $soma . PHP_EOL . $subtracao .PHP_EOL . $multiplicacao .PHP_EOL . $divisao;
}

echo somaSubtracaoMultiplicarDividir($num, $num2);


