<?php
// --- DADOS SIMULADOS DE UM FORMULÁRIO ---
// Todos os valores são recebidos como strings.
 
$idProduto = "105";
$nomeProduto = "Teclado Mecânico RGB";
$quantidade = "25"; // Deve ser um inteiro
$precoUnitario = "399.90"; // Deve ser um float/double
$emEstoque = "true"; // Deve ser um booleano
 
echo "--- 1. DADOS ORIGINAIS (COMO STRINGS) ---<br>";
echo "ID do Produto: " . $idProduto . " (Tipo: " . gettype($idProduto) . ")<br>";
echo "Quantidade: " . $quantidade . " (Tipo: " . gettype($quantidade) . ")<br>";
echo "Preço Unitário: R$ " . $precoUnitario . " (Tipo: " . gettype($precoUnitario) . ")<br>";
echo "Em Estoque: " . $emEstoque . " (Tipo: " . gettype($emEstoque) . ")<br>";
echo "<hr><br>";
 
// --- CONVERSÕES ---
 
$idProdutoConvertido = (int) $idProduto;
$quantidadeConvertida = (int) $quantidade;
$precoUnitarioConvertido = (float) $precoUnitario;
$emEstoqueConvertido = filter_var($emEstoque, FILTER_VALIDATE_BOOLEAN);
 
// --- CÁLCULO ---
$valorTotalEstoque = $quantidadeConvertida * $precoUnitarioConvertido;
 
echo "--- 2. DADOS APÓS A CONVERSÃO (CASTING) ---<br>";
echo "ID do Produto: " . $idProdutoConvertido . " (Tipo: " . gettype($idProdutoConvertido) . ")<br>";
echo "Quantidade: " . $quantidadeConvertida . " (Tipo: " . gettype($quantidadeConvertida) . ")<br>";
echo "Preço Unitário: R$ " . $precoUnitarioConvertido . " (Tipo: " . gettype($precoUnitarioConvertido) . ")<br>";
 
$statusEstoque = $emEstoqueConvertido ? "Sim" : "Não";
echo "Em Estoque: " . $statusEstoque . " (Tipo da variável original convertida: " . gettype($emEstoqueConvertido) . ")<br><br>";
 
echo "--- 3. CÁLCULO FINAL ---<br>";
echo "Valor total do estoque para '" . $nomeProduto . "': R$ " . number_format($valorTotalEstoque, 2, ',', '.') . "<br>";
?>
 