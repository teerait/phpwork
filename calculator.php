<?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];

    switch ($op) {
        case '+':
            function addNumber($num1,$num2){
                echo "<span style='color: red;'>";
                echo $num1 + $num2;
                echo "</span>";
            }
            addNumber($num1,$num2);
            break;
        case '-':
            function minusNumber($num1,$num2){
                echo $num1 - $num2;
            }
            minusNumber($num1,$num2);
            break;
        case 'x':
            function multipleNumber($num1,$num2){
                echo $num1 * $num2;
            }
            multipleNumber($num1,$num2);
            break;
        
        default:
        function divideNumber($num1,$num2){
            echo $num1 / $num2;
        }
        divideNumber($num1,$num2);
            break;
    }

?>