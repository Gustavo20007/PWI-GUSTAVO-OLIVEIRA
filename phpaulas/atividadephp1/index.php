<?php 

// 1. Array Associativo com Dados dos Alunos 
$alunos = [
    "Ana"    => [7.5, 8.0, 6.5],
    "Bruno"  => [5.0, 4.5, 6.0],
    "Carlos" => [9.0, 8.5, 9.5],
    "Diana"  => [6.0, 7.0, 5.0]
];

// Média mínima para aprovação 
$mediaAprovacao = 7.0;

// Array para armazenar os resultados finais 
$resultados = [];

// 2. ----- SUA LÓGICA AQUI -----
foreach ($alunos as $nome => $notas) {

    // Soma das notas
    $soma = array_sum($notas);

    // Cálculo da média
    $media = $soma / count($notas);

    // Situação do aluno
    $situacao = ($media >= $mediaAprovacao) ? "Aprovado" : "Reprovado";

    // Armazena no array de resultados
    $resultados[$nome] = [
        "media" => $media,
        "situacao" => $situacao
    ];
}

// 3. Exibir o Relatório Final (Apenas para demonstração)
echo "## 📊 Relatório de Notas ##\n\n";

foreach ($resultados as $aluno => $dados) {
    echo "Aluno: **" . $aluno . "**\n";
    echo "-> Média: " . number_format($dados['media'], 2) . "\n";
    echo "-> Situação: **" . $dados['situacao'] . "**\n";
    echo "---------------------------\n";
}

?>
