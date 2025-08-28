<?php
// Operação 1: 12 < 5 OR "João" === "João"
$operacao1 = (12 < 5 || "João" === "João");
echo "Operação 1 (12 < 5 OR \"João\" === \"João\"): " . ($operacao1 ? 'true' : 'false') . "\n";

// Operação 2: 1 > 5 OR 1
$operacao2 = (1 > 5 || 1);
echo "Operação 2 (1 > 5 OR 1): " . ($operacao2 ? 'true' : 'false') . "\n";

// Operação 3: 20 === "20" AND 51 >= 31
$operacao3 = (20 === "20" && 51 >= 31);
echo "Operação 3 (20 === \"20\" AND 51 >= 31): " . ($operacao3 ? 'true' : 'false') . "\n";

?>
