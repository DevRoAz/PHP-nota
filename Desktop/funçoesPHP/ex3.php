<?php

function imparOuPar($num) {
    if ($num % 2 == 0) {
        echo 'O Número é Par';
    } else {
        echo 'O Número é Impar';
    }
}

imparOuPar(readline("Digite um número: "));