<?php

function calcularMedia($notas)
{
    // Maior e menor nota
    $maior = max($notas);
    $menor = min($notas);

    // Média
    $media = array_sum($notas) / count($notas);

    // Situação final
    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    // Retorna os resultados
    return [
        "Maior Nota" => $maior,
        "Menor Nota" => $menor,
        "Média" => number_format($media, 2),
        "Situação" => $situacao
    ];
}

// Exemplo de uso
$notas = [8.5, 7.0, 6.5, 9.0];

$resultado = calcularMedia($notas);

echo "Resultado:\n";
foreach ($resultado as $chave => $valor) {
    echo "$chave: $valor\n";
}

?>