<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 Operações</title>
</head>
    <?php
    $operacao = $_GET['operacao'];
    $x = $_GET['x'];
    $y = $_GET['y'];

    if ($operacao == 'adicao') {
        $resultado = $x + $y;
        echo $resultado; 
        } 
    elseif ($operacao == 'subtracao') {
        $resultado = $x - $y;
        echo $resultado;
         } 
         elseif ($operacao == 'multiplicacao') {
        $resultado = $x * $y;
        echo $resultado ;
        } 
    elseif ($operacao == 'divisao') {
            $resultado = $x / $y;
            echo $resultado;
        } 
    ?>
</body>
</html>