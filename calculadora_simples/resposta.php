<?php
 
 $numero1 = $_POST['numero1'];
 $numero2 = $_POST['numero2'];
 $operacao = $_POST['operacao'];

 if($operacao == 'soma'){
    $resultado = $numero1 + $numero2;
 }elseif($operacao == 'subtracao'){
    $resultado = $numero1 - $numero2;
 }elseif($operacao == 'multiplicacao'){
    $resultado = $numero1 * $numero2;
 }elseif($operacao == 'divisao'){
    $resultado = $numero1 / $numero2;
 }

 echo "O resy=ultado da operação é: $resultado";
 
 ?>