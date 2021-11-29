<?php

$servidor = "localhost";
$usuario = "vitor";
$senha = "";
$bd = "bdescola";

$connect = mysqli_connect($servidor,$usuario,$senha,$bd);

if ($connect) {
    echo "Bem-vindo ao Banco de Dados da Escola";
}

else {
    echo "Erro! Você não é bem-vindo aqui";
}