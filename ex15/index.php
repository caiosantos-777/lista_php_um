<?php
require_once 'funcoes.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Demonstração de Funções PHP</title>
</head>
<body>
<h2>Demonstração da Biblioteca de Funções</h2>
<ul>
<li>1. Calcular IMC: Peso 70kg, Altura 1.75m = <?php echo
calcularIMC(70, 1.75); ?></li>

<li>2. Validar E-mail: 'usuario@email.com' é válido?
<?php echo validarEmail('usuario@email.com') ? 'Sim' : 'Não';
?></li>
<li>3. Gerar Senha Aleatória: <?php echo
gerarSenhaAleatoria(10); ?></li>
<li>4. Contar Vogais: Em 'Desenvolvimento PHP' existem
<?php echo contarVogais('Desenvolvimento PHP'); ?> vogais.</li>
<li>5. Inverter Texto: 'Espelho' invertido é <?php echo
inverterTexto('Espelho'); ?></li>
<li>6. Calcular Idade: Nascido em '1998-05-20' tem <?php
echo calcularIdade('1998-05-20'); ?> anos.</li>
<li>7. Converter Moeda: $100.00 dólares com taxa 5.20 =
R$ <?php echo converterMoeda(100.00); ?></li>
<li>8. Formatar Telefone: '11987654321' formatado = <?php
echo formatarTelefone('11987654321'); ?></li>
<li>9. Gerar Saudação: Para horário de 14h = <?php echo
gerarSaudacao(14); ?></li>
<li>10. Validar Senha Forte: 'Senha123!' é forte? <?php
echo validarSenhaForte('Senha123!') ? 'Sim' : 'Não'; ?></li>
</ul>
</body>
</html>