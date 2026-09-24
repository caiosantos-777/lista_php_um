<?php

function analisarNumero($numero)
{
    
    $paridade = ($numero % 2 == 0) ? "Par" : "Ímpar";

    
    if ($numero <= 1) {
        $primo = "Não é primo";
    } else {
        $primo = "É primo";
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $primo = "Não é primo";
                break;
            }
        }
    }

    
    $soma = 0;
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }

    $perfeito = ($soma == $numero && $numero > 0) ? "É perfeito" : "Não é perfeito";

    
    return [
        "Paridade" => $paridade,
        "Primo" => $primo,
        "Perfeito" => $perfeito
    ];
}


$numero = 28;
$resultado = analisarNumero($numero);

echo "Número: $numero\n";
foreach ($resultado as $chave => $valor) {
    echo "$chave: $valor\n";
}

?>