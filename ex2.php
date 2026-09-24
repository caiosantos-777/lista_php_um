<?php

function inverterTexto($texto) {
    return strrev($texto);
}


$texto = "Espelho Mágico";


$textoInvertido = inverterTexto($texto);


echo "Texto original: " . $texto . "<br>";
echo "Texto invertido: " . $textoInvertido . "<br>";
echo "Quantidade de caracteres: " . strlen($texto);

?>