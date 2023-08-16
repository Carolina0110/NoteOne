<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $valor = $_GET["valor"];
    $conversao = $_GET["conversao"];

    switch ($conversao) {
        case "celsius_fahrenheit":
            $resultado = ($valor * 9/5) + 32;
            break;
        case "fahrenheit_celsius":
            $resultado = ($valor - 32) * 5/9;
            break;
        case "usd_brl":
            $resultado = $valor * 5.27; // Valor aproximado
            break;
        case "brl_usd":
            $resultado = $valor / 5.27; // Valor aproximado
            break;
    }

    $resultado = number_format($resultado, 2);
    include("resultado.php");
    exit; // Importante para encerrar a execução do script
}
?>
