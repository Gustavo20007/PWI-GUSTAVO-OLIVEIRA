<?php
$pessoa = [
    "nome" => "Cristiano Ronaldo",
    "idade" => 40,
    "profissao" => "Jogador de futebol",
    "cidade" => "Funchal, Portugal",
    "altura" => 1.87
];

$idade = 18;

if($pessoa['idade']>= $idade){
    echo "A pessoa é maior de idade!";
}
?> 