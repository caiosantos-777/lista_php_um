<?php

// 1 - Calcular IMC
function calcularIMC($peso, $altura)
{
    return $peso / ($altura * $altura);
}

// 2 - Validar e-mail
function validarEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// 3 - Gerar senha aleatória
function gerarSenhaAleatoria($tamanho = 10)
{
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%";
    $senha = "";

    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    return $senha;
}

// 4 - Contar vogais
function contarVogais($texto)
{
    preg_match_all('/[aeiouáéíóú]/i', $texto, $resultado);
    return count($resultado[0]);
}

// 5 - Inverter texto
function inverterTexto($texto)
{
    return strrev($texto);
}

// 6 - Calcular idade
function calcularIdade($dataNascimento)
{
    $nascimento = new DateTime($dataNascimento);
    $hoje = new DateTime();

    $idade = $hoje->diff($nascimento);

    return $idade->y;
}

// 7 - Converter moeda
function converterMoeda($valor)
{
    return "R$ " . number_format($valor, 2, ",", ".");
}

// 8 - Formatar telefone
function formatarTelefone($telefone)
{
    $telefone = preg_replace('/\D/', '', $telefone);

    return "(" . substr($telefone, 0, 2) . ") "
        . substr($telefone, 2, 5) . "-"
        . substr($telefone, 7);
}

// 9 - Gerar saudação conforme horário
function gerarSaudacao()
{
    $hora = date("H");

    if ($hora < 12) {
        return "Bom dia!";
    } elseif ($hora < 18) {
        return "Boa tarde!";
    } else {
        return "Boa noite!";
    }
}

// 10 - Validar senha forte
function validarSenhaForte($senha)
{
    $temMaiuscula = preg_match('/[A-Z]/', $senha);
    $temMinuscula = preg_match('/[a-z]/', $senha);
    $temNumero = preg_match('/[0-9]/', $senha);
    $temEspecial = preg_match('/[\W]/', $senha);

    return strlen($senha) >= 8 &&
           $temMaiuscula &&
           $temMinuscula &&
           $temNumero &&
           $temEspecial;
}

?>