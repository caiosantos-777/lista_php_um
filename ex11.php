<?php

function formatarTexto($texto)
{
    // Texto em maiúsculas
    $maiusculas = mb_strtoupper($texto);

    // Texto em minúsculas
    $minusculas = mb_strtolower($texto);

    // Primeira letra de cada palavra em maiúscula
    $primeirasMaiusculas = mb_convert_case($texto, MB_CASE_TITLE, "UTF-8");

    // Quantidade de caracteres
    $quantidade = mb_strlen($texto);

    // Retorna os resultados
    return [
        "Maiúsculas" => $maiusculas,
        "Minúsculas" => $minusculas,
        "Primeiras Letras Maiúsculas" => $primeirasMaiusculas,
        "Quantidade de Caracteres" => $quantidade
    ];
}

// Exemplo de uso
$texto = "programação em php";

$resultado = formatarTexto($texto);

echo "Resultado:\n";
foreach ($resultado as $chave => $valor) {
    echo "$chave: $valor\n";
}

?>