<?php

function converterTemperatura($valor, $origem, $destino) {
    
    switch (strtoupper($origem)) {
        case "C":
            $celsius = $valor;
            break;

        case "F":
            $celsius = ($valor - 32) * 5 / 9;
            break;

        case "K":
            $celsius = $valor - 273.15;
            break;

        default:
            return "Escala de origem inválida!";
    }

    
    switch (strtoupper($destino)) {
        case "C":
            return $celsius;

        case "F":
            return ($celsius * 9 / 5) + 32;

        case "K":
            return $celsius + 273.15;

        default:
            return "Escala de destino inválida!";
    }
}


echo "25°C para Fahrenheit: " . converterTemperatura(25, "C", "F") . " °F<br>";
echo "100°F para Celsius: " . converterTemperatura(100, "F", "C") . " °C<br>";
echo "0°C para Kelvin: " . converterTemperatura(0, "C", "K") . " K<br>";
echo "300K para Celsius: " . converterTemperatura(300, "K", "C") . " °C";

?>