<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Conversão</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
</head>
<body>
<div class="container">
    <div class="logo">
        <span class="logo-text">Carolina0110</span>
    </div>

    <h1>Resultado da Conversão</h1>

    <div class="result-box">
        <p class="result-text">
            <?php
            if (isset($resultado)) {
                if ($conversao == "usd_brl" || $conversao == "brl_usd") {
                    echo "Resultado: $ " . number_format($resultado, 2); // Adicionado "$" para dólares
                } elseif ($conversao == "celsius_fahrenheit") {
                    echo "Resultado: $resultado °F";
                } elseif ($conversao == "fahrenheit_celsius") {
                    echo "Resultado: $resultado °C";
                } else {
                    echo "Resultado: $resultado";
                }
            }
            ?>
        </p>
        <?php
        if (isset($conversao)) {
            echo "<div class='conversion-method'>";
            echo "Método de Conversão: $conversao";
            echo "</div>";
        }
        ?>
    </div>

    <a class="button" href="index.html">Voltar</a>
</div>
</body>
</html>

