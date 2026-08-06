<?php

function inverterTexto($texto) {
    return strrev($texto);
}

// String de exemplo
$texto = "Espelho Mágico";

// Inverte o texto
$textoInvertido = inverterTexto($texto);

// Exibe os resultados
echo "Texto original: " . $texto . "<br>";
echo "Texto invertido: " . $textoInvertido . "<br>";
echo "Quantidade de caracteres: " . strlen($texto);

?>