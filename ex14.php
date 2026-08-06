<?php

function estatisticasNumericas($numeros)
{
    // Soma dos números
    $soma = array_sum($numeros);

    // Média
    $media = $soma / count($numeros);

    // Maior e menor valor
    $maior = max($numeros);
    $menor = min($numeros);

    // Ordena o vetor para calcular a mediana
    sort($numeros);

    $quantidade = count($numeros);

    if ($quantidade % 2 == 0) {
        // Quantidade par: média dos dois valores centrais
        $mediana = ($numeros[$quantidade / 2 - 1] + $numeros[$quantidade / 2]) / 2;
    } else {
        // Quantidade ímpar: valor central
        $mediana = $numeros[floor($quantidade / 2)];
    }

    // Conta números pares e ímpares
    $pares = 0;
    $impares = 0;

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    // Retorna todas as estatísticas
    return [
        "Soma" => $soma,
        "Média" => number_format($media, 2),
        "Maior valor" => $maior,
        "Menor valor" => $menor,
        "Mediana" => $mediana,
        "Quantidade de pares" => $pares,
        "Quantidade de ímpares" => $impares
    ];
}

// Exemplo de uso
$numeros = [10, 5, 8, 3, 12, 7, 4];

$resultado = estatisticasNumericas($numeros);

echo "Estatísticas:\n";
foreach ($resultado as $chave => $valor) {
    echo "$chave: $valor\n";
}

?>