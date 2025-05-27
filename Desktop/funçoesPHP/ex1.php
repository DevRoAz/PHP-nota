<?php

function multiplicar($num1, $num2){
    $resultado = $num1 * $num2;
    echo 'A Multiplicação dos Números é ' . $resultado;
}

multiplicar(readline("Digite o primeiro número: "), readline("Digite o segundo número: "));

