<?php

function formatarTexto($texto)
{
    
    $maiusculas = mb_strtoupper($texto);

   
    $minusculas = mb_strtolower($texto);

    
    $primeirasMaiusculas = mb_convert_case($texto, MB_CASE_TITLE, "UTF-8");

    
    $quantidade = mb_strlen($texto);

    
    return [
        "Maiúsculas" => $maiusculas,
        "Minúsculas" => $minusculas,
        "Primeiras Letras Maiúsculas" => $primeirasMaiusculas,
        "Quantidade de Caracteres" => $quantidade
    ];
}


$texto = "programação em php";

$resultado = formatarTexto($texto);

echo "Resultado:\n";
foreach ($resultado as $chave => $valor) {
    echo "$chave: $valor\n";
}

?>