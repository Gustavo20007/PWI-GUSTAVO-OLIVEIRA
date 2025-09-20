<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inteiro = (int)$_POST['inteiro'];
    $decimal = (float)$_POST['decimal'];
    $soma = $inteiro + $decimal;
    echo "Soma: $soma";
}
?>

<form method="post">
    Número inteiro: <input type="number" name="inteiro"><br>
    Número decimal: <input type="text" name="decimal"><br>
    <input type="submit" value="Enviar">
</form>
