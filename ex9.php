<?php

function analisarNumero($numero)
{
    // Verifica se é par ou ímpar
    $paridade = ($numero % 2 == 0) ? "Par" : "Ímpar";

    // Verifica se é primo
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

    // Verifica se é perfeito
    $soma = 0;
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }

    $perfeito = ($soma == $numero && $numero > 0) ? "É perfeito" : "Não é perfeito";

    // Retorna todas as informações
    return [
        "Paridade" => $paridade,
        "Primo" => $primo,
        "Perfeito" => $perfeito
    ];
}

// Exemplo de uso
$numero = 28;
$resultado = analisarNumero($numero);

echo "Número: $numero\n";
foreach ($resultado as $chave => $valor) {
    echo "$chave: $valor\n";
}

?>