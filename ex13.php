<?php

// Função para criptografar
function criptografarMensagem($texto, $deslocamento = 3)
{
    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {
        $caractere = $texto[$i];

        if (ctype_alpha($caractere)) {
            $base = ctype_upper($caractere) ? ord('A') : ord('a');
            $resultado .= chr((ord($caractere) - $base + $deslocamento) % 26 + $base);
        } else {
            $resultado .= $caractere;
        }
    }

    return $resultado;
}

// Função para descriptografar
function descriptografarMensagem($texto, $deslocamento = 3)
{
    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {
        $caractere = $texto[$i];

        if (ctype_alpha($caractere)) {
            $base = ctype_upper($caractere) ? ord('A') : ord('a');
            $resultado .= chr((ord($caractere) - $base - $deslocamento + 26) % 26 + $base);
        } else {
            $resultado .= $caractere;
        }
    }

    return $resultado;
}

// Exemplo de uso
$mensagem = "Ola Mundo";

$criptografada = criptografarMensagem($mensagem);
$descriptografada = descriptografarMensagem($criptografada);

echo "Mensagem original: $mensagem\n";
echo "Mensagem criptografada: $criptografada\n";
echo "Mensagem descriptografada: $descriptografada\n";

?>