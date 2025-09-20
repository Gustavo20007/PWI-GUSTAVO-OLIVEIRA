<?php
$valorDouble = 12.7;
$valorInt = 15;

// Conversão explícita (casting)
$doubleParaInt = (int)$valorDouble;
$intParaDouble = (double)$valorInt;

// Conversão implícita ocorre automaticamente
$resultado = $valorInt + $valorDouble;

echo "Double para Int: $doubleParaInt<br>";
echo "Int para Double: $intParaDouble<br>";
echo "Conversão implícita (soma): $resultado";
?>
