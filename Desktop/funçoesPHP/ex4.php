<?php

function calcularMedia($numeros) {
    if (($numeros) == 0) {
        return 0;
    }
    
    $soma = array_sum($numeros);
    
    $media = $soma / count($numeros);
    return $media;
}

$aluno1 = [(readline("Digite a primeira nota: ")), (readline("Digite a segunda nota: ")), (readline("Digite a terceira nota: ")), (readline("Digite a quarta nota: "))];
$aluno2 = [(readline("Digite a primeira nota: ")), (readline("Digite a segunda nota: ")), (readline("Digite a terceira nota: ")), (readline("Digite a quarta nota: "))];
$aluno3 = [(readline("Digite a primeira nota: ")), (readline("Digite a segunda nota: ")), (readline("Digite a terceira nota: ")), (readline("Digite a quarta nota: "))];

echo "Média das notas do primeiro aluno: " . calcularMedia($aluno1) . PHP_EOL;

echo "Média das notas do segundo aluno: " . calcularMedia($aluno2) . PHP_EOL;

echo "Média das notas do terceiro aluno: " . calcularMedia($aluno3) . PHP_EOL;


