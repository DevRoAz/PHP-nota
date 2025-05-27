<?php

$numero = readline("Digite um número: ");

if ($numero >= 1) {
    echo "O numero digitado é Positivo";
}else if($numero == 0){
    echo "O numero digitado é Zero";
}else {
    echo "O numero digitado é Negativo";
}