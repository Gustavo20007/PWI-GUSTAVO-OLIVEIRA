<?php
$valor = true; // Aqui você pode mudar pra false ou outro tipo de valor

if (is_bool($valor)) {
    echo "O valor é booleano<br>";
    
    if ($valor) {
        echo "O valor é TRUE<br>";
    } else {
        echo "O valor é FALSE<br>";
    }
} else {
    echo "O valor NÃO é booleano";
}
?>