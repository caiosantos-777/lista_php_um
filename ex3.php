<?php

function mascararCpf($cpf) {
    $tamanho = strlen($cpf);

    
    return str_repeat("*", $tamanho - 4) . substr($cpf, -4);
}


$cpf = "12345678901";

echo "CPF original: " . $cpf . "<br>";
echo "CPF mascarado: " . mascararCpf($cpf);

?>
