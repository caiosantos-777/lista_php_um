<?php

function ordenarNomes($nomes)
{
    
    $lista = explode(",", $nomes);

    
    $lista = array_map("trim", $lista);

    
    sort($lista);

    
    return $lista;
}


$nomes = "Carlos, Ana, João,   Beatriz, Marcos";
$resultado = ordenarNomes($nomes);

echo "Lista organizada:\n";
foreach ($resultado as $nome) {
    echo $nome . PHP_EOL;
}

?>