<?php
$dia = 4;

$dias = [
    1 => "Domingo",
    2 => "Segunda-feira",
    3 => "Terça-feira",
    4 => "Quarta-feira",
    5 => "Quinta-feira",
    6 => "Sexta-feira",
    7 => "Sábado"
];

echo isset($dias[$dia]) ? $dias[$dia] . "\n" : "Número inválido\n";
?>
