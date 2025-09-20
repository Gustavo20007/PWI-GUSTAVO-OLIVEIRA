<?php
$globalVar = "Sou global";

function exemplo() {
    $localVar = "Sou local";
    global $globalVar;

    echo "Local: $localVar\n";
    echo "Global: $globalVar\n";
}

exemplo();
?>
