<?php 

function apresentarUsuario(){
    $nome = readline('Digite seu nome: ');
    $profissao = readline('Digite sua Profissão: ');
    
    echo 'Olá, ' . $nome . ' Sua Profissão é ' . $profissao;
}

apresentarUsuario();