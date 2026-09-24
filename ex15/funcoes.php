<?php

function calcularIMC(float $peso, float $altura): float {
return round($peso / ($altura ** 2), 2);
}
function validarEmail(string $email): bool {
return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
}
function gerarSenhaAleatoria(int $tamanho = 8): string {
return substr(bin2hex(random_bytes($tamanho)), 0, $tamanho);
}
function contarVogais(string $texto): int {
preg_match_all('/[aeiouáéíóúâêîôûãõàèìòù]/ui', $texto,
$matches);
return count($matches[0]);
}
function inverterTexto(string $texto): string {
return strrev($texto);
}
function calcularIdade(string $dataNascimento): int {
$nascimento = new DateTime($dataNascimento);
$hoje = new DateTime();
return $hoje->diff($nascimento)->y;
}
function converterMoeda(float $valor, float $taxaCambio = 5.20):
float {
return round($valor * $taxaCambio, 2);
}
function formatarTelefone(string $telefone): string {
$telefone = preg_replace('/[^0-9]/', '', $telefone);
if (strlen($telefone) === 11) {
return preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1)
$2-$3', $telefone);

}
return $telefone;
}
function gerarSaudacao(int $horaAtual): string {
if ($horaAtual >= 6 && $horaAtual < 12) return "Bom dia!";
if ($horaAtual >= 12 && $horaAtual < 18) return "Boa tarde!";
return "Boa noite!";
}
function validarSenhaForte(string $senha): bool {
$tamanho = strlen($senha) >= 8;
$maiuscula = preg_match('/[A-Z]/', $senha);
$numero = preg_match('/[0-9]/', $senha);
$especial = preg_match('/[^a-zA-Z0-9]/', $senha);
return $tamanho && $maiuscula && $numero && $especial;
}
?>