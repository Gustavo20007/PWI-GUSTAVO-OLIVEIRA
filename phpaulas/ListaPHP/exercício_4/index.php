<?php
final class Constantes {
    const VELOCIDADE_DA_LUZ = 299792458; // m/s
}

echo "Velocidade da luz: " . Constantes::VELOCIDADE_DA_LUZ . " m/s<br>";

// Tentativa de alterar gera erro
// Constantes::VELOCIDADE_DA_LUZ = 123;
?>
