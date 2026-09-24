<?php

function analisarProdutos($produtos, $pesquisa)
{
    $maisCaro = "";
    $maisBarato = "";
    $maiorPreco = -1;
    $menorPreco = PHP_INT_MAX;
    $soma = 0;
    $encontrado = "Produto não encontrado.";

    foreach ($produtos as $nome => $preco) {
        
        if ($preco > $maiorPreco) {
            $maiorPreco = $preco;
            $maisCaro = $nome;
        }

        
        if ($preco < $menorPreco) {
            $menorPreco = $preco;
            $maisBarato = $nome;
        }

        
        $soma += $preco;

        
        if (strtolower($nome) == strtolower($pesquisa)) {
            $encontrado = "Produto encontrado: $nome - R$ " . number_format($preco, 2, ",", ".");
        }
    }

    
    $media = $soma / count($produtos);

    return [
        "Produto mais caro" => "$maisCaro - R$ " . number_format($maiorPreco, 2, ",", "."),
        "Produto mais barato" => "$maisBarato - R$ " . number_format($menorPreco, 2, ",", "."),
        "Média dos preços" => "R$ " . number_format($media, 2, ",", "."),
        "Pesquisa" => $encontrado
    ];
}


$produtos = [
    "Arroz" => 25.50,
    "Feijão" => 9.80,
    "Macarrão" => 6.30,
    "Açúcar" => 5.90
];

$pesquisa = "Feijão";

$resultado = analisarProdutos($produtos, $pesquisa);

echo "Resultado:\n";
foreach ($resultado as $chave => $valor) {
    echo "$chave: $valor\n";
}

?>