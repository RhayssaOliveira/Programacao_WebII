<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
</head>
<body>

<h2>Calculadora PHP</h2>

<form action="">
    Número 1: <input type="number" name="num1" required><br><br>
    Operação: <input type="text" name="operacao" required><br><br>
    Número 2: <input type="number" name="num2" required><br><br>
    <input type="submit" value="Calcular">
</form>

<?php
if (isset($_GET['num1'], $_GET['num2'], $_GET['operacao'])) {
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operacao = $_GET["operacao"];

    switch ($operacao) {
        case '+':
            $resultado = $num1 + $num2;
            break;
        case '-':
            $resultado = $num1 - $num2;
            break;
        case '*':
            $resultado = $num1 * $num2;
            break;
        case '/':
            $resultado = ($num2 != 0) ? $num1 / $num2 : "Não é possível dividir por zero.";
            break;
        default:
            $resultado = "Operação inválida.";
    }

    echo "Resultado: " . $resultado;
}
?>

</body>
</html>