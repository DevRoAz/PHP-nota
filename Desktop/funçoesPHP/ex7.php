<?php

function ordenarLivrosDecrescente($livros) {
    rsort($livros);
    return $livros;
}

$biblioteca = ["Harry Potter", "O Senhor dos Anéis", "A Arte da Guerra", "O Pequeno Príncipe"];

echo "Livros em ordem decrescente: " . PHP_EOL;
$livrosOrdenados = ordenarLivrosDecrescente($biblioteca);


foreach ($livrosOrdenados as $livro) {
    echo "- " . $livro . PHP_EOL;
}

