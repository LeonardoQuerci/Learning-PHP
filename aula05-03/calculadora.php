<?php 
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $operacao=$_POST['operacao'];
    switch($operacao){
        case '+':
            $resultado=$num1+$num2;
            break;
        case '-':
            $resultado=$num1-$num2;
            break;
        case '*':
            $resultado=$num1*$num2;
            break;
        case '/':
            if($num2!=0){
                $resultado=$num1/$num2;
            }else{
                echo "ERRO: DIVISÃO POR ZERO";
                exit();
            }
            break;
        default:
            echo "Sinal inválido";
            exit();
    }
    echo "Resultado: ".$resultado;
?>