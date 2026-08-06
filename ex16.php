<?php

    $senha = "caioM!11052009";

    function analisarSenha() 

{  
    function maiusculas($senha) {
        $maiusculas = preg_match('/[A-Z]/', $senha, $matches);

            echo "A senha contém essa quantidade de letras maiúsculas: $maiusculas $matches <br>";

    }

    function minusculas($senha) {
        $minusculas = preg_match('/[a-z]/', $senha, $matches);

        echo "A senha contém essa quantidade de letras minúsculas: $minusculas $matches <br>";

    }

    function numeros($senha) {
        $numeros = preg_match('/[0-9]/', $senha, $matches);

        echo "A senha contém essa quantidade de números: $numeros $matches <br>";

    }

    function especiais($senha) {
        $especiais = preg_match('/[!@#$%^&*()-+]/', $senha , $matches);

        echo "A senha contém essa quantidade de caracteres especiais: $especiais $matches <br>";


    }




}




?>