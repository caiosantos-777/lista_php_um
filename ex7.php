<?php

function calcularDesconto($valorCompra) {

    if ($valorCompra > 1000) {
        $percentual = 30;
    } elseif ($valorCompra > 500) {
        $percentual = 20;
    } elseif ($valorCompra > 100) {
        $percentual = 10;
    } else {
        $percentual = 0;
    }

    $desconto = ($valorCompra * $percentual) / 100;
    $valorFinal = $valorCompra - $desconto;

    return [
        "valorOriginal" => $valorCompra,
        "percentual" => $percentual,
        "desconto" => $desconto,
        "valorFinal" => $valorFinal
    ];
}


$resultado = calcularDesconto(1200);

echo "Valor original: R$ " . number_format($resultado["valorOriginal"], 2, ",", ".") . "<br>";
echo "Desconto aplicado: " . $resultado["percentual"] . "%<br>";
echo "Valor do desconto: R$ " . number_format($resultado["desconto"], 2, ",", ".") . "<br>";
echo "Valor final: R$ " . number_format($resultado["valorFinal"], 2, ",", ".");

?>