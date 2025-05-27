<?php

function contar() {
    $contador = 0;
    $contador++;        
    echo "Valor do contador: " . $contador . PHP_EOL;
}

echo "Primeira contagem:" . PHP_EOL;
contar();

echo "Segunda contagem:" . PHP_EOL;
contar();

echo "Terceira contagem:" . PHP_EOL;
contar();

echo "Quarta contagem:" . PHP_EOL;
contar();

echo "O valor sempre retorna 1 pois a função contar é uma função local " . PHP_EOL . " então o valor do contador não é mantido entre as contagens.";