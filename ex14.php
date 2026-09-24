<?php

function estatisticasNumericas($numeros)
{
    
    $soma = array_sum($numeros);

    
    $media = $soma / count($numeros);

    
    $maior = max($numeros);
    $menor = min($numeros);

    
    sort($numeros);

    $quantidade = count($numeros);

    if ($quantidade % 2 == 0) {
        
        $mediana = ($numeros[$quantidade / 2 - 1] + $numeros[$quantidade / 2]) / 2;
    } else {
        
        $mediana = $numeros[floor($quantidade / 2)];
    }

    
    $pares = 0;
    $impares = 0;

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    
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


$numeros = [10, 5, 8, 3, 12, 7, 4];

$resultado = estatisticasNumericas($numeros);

echo "Estatísticas:\n";
foreach ($resultado as $chave => $valor) {
    echo "$chave: $valor\n";
}

?>