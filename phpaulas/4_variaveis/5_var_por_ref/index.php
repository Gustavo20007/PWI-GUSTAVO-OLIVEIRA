<?php

$x = 10;

$y =& $x;

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y = 15;

echo "atribuição após ref";
echo "<br>";
echo $x;
echo "<br>";
echo$y;
echo "<br>";

$x = 20;
echo "atribuição após ref2";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$nome = "DekkoColati";

$nome2 =& $nome;

echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";

$nome2 = "Gustavo";

echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";

?>