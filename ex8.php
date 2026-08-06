<?php

function ordenarNomes($nomes)
{
    // Transforma a string em um vetor
    $lista = explode(",", $nomes);

    // Remove os espaços antes e depois de cada nome
    $lista = array_map("trim", $lista);

    // Ordena em ordem alfabética
    sort($lista);

    // Retorna o vetor organizado
    return $lista;
}

// Exemplo de uso
$nomes = "Carlos, Ana, João,   Beatriz, Marcos";
$resultado = ordenarNomes($nomes);

echo "Lista organizada:\n";
foreach ($resultado as $nome) {
    echo $nome . PHP_EOL;
}

?>