<?php
// Definindo as variáveis
$valor1 = 5;
$valor2 = 3;

// Testando o operador de igualdade (==)
$igualdade = ($valor1 == $valor2); // false

// Testando o operador de diferença (!=)
$diferenca = ($valor1 != $valor2); // true

// Testando o operador idêntico (===)
$identico = ($valor1 === $valor2); // false

// Testando o operador não idêntico (!==)
$naoIdentico = ($valor1 !== $valor2); // true

// Imprimindo os resultados
echo "Igualdade (5 == 3): " . ($igualdade ? 'true' : 'false') . "\n";
echo "Diferença (5 != 3): " . ($diferenca ? 'true' : 'false') . "\n";
echo "Idêntico (5 === 3): " . ($identico ? 'true' : 'false') . "\n";
echo "Não idêntico (5 !== 3): " . ($naoIdentico ? 'true' : 'false') . "\n";

?>
