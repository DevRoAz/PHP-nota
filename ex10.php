<?php

$nome = readline("Informe seu Nome: ");
$idade = readline("Informe sua Idade: ");
$salario = readline("Informe seu salario: ");

function pagamentoBonus($nome, $idade, $salario){
    if (($idade >= 30) && ($idade <= 39)){
        $aumento = $salario * 3 / 100;
        $salarioComBonus = $salario + $aumento;
        echo "Bem-vindo(a) " . $nome . " Sua idade é " . $idade . " Anos " . " E portanto você receberá um aumento de " . $aumento . " Reais " . " Totalizando um Salario total de " . $salarioComBonus . " Reais ";
    }else if (($idade >= 40) && ($idade <= 49)){
        $aumento = $salario * 4 / 100;
        $salarioComBonus = $salario + $aumento;
        echo "Bem-vindo(a) " . $nome . " Sua idade é " . $idade . " Anos " . " E portanto você receberá um aumento de " . $aumento . " Reais " . " Totalizando um Salario total de " . $salarioComBonus . " Reais ";
    }else if ($idade >= 50){
        $aumento = $salario * 6 / 100;
        $salarioComBonus = $salario + $aumento;
        echo "Bem-vindo(a) " . $nome . " Sua idade é " . $idade . " Anos " . " E portanto você receberá um aumento de " . $aumento . " Reais " . " Totalizando um Salario total de " . $salarioComBonus . " Reais ";
}else {
    echo "Você Ainda não possui Idade para um aumento! ";
}
}

pagamentoBonus($nome, $idade, $salario);