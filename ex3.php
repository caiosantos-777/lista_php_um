<?php

function mascararCpf($cpf) {
    $tamanho = strlen($cpf);

    // Substitui todos os caracteres por *,
    // deixando visíveis apenas os 4 últimos
    return str_repeat("*", $tamanho - 4) . substr($cpf, -4);
}

// Exemplo
$cpf = "12345678901";

echo "CPF original: " . $cpf . "<br>";
echo "CPF mascarado: " . mascararCpf($cpf);

?>
