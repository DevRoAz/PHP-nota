<?php

$diaSemana = readline(
    "Digite um número correspondente ao dia da semana:  " 
);

switch ($diaSemana){
    case 1 :
    echo "Domingo";
    break;
        
    case 2 :
    echo "Segunda-Feira";
     break;
            
    case 3 :
     echo "Terça-Feira";
    break;

    case 4:
    echo "Quarta-Feira";
    break;
       

    case 5:
    echo "Quinta-Feira";
    break;

    case 6 :
    echo "Sexta-Feira";
    break;

    case 7 :
    echo "Sabado";
    break;

    default: 
    echo "Erro ao indentificar o número digitado!";
    break;
        
}