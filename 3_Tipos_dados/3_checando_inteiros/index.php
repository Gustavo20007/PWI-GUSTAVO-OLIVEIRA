<?php
if(is_int(82)){//true
echo"É um número inteiro<br>";    
}

if(is_int("Não é um número inteiro")){//false
echo"É um numero inteiro 2 <br>";
}

$n=8;
if(is_int($n)){//true
    echo"É um número inteiro na variavel<br>";    
    }