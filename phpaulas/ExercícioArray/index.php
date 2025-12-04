<?php
$array = range(10, 45);

foreach ($array as $num) {
    $soma = array_sum(str_split($num));

    if ($soma == 6) {
        echo "Número: $num | Soma: $soma\n";

        if ($num > 30) {
            echo "O número $num é muito alto!\n";
        }
    }
}
?>
