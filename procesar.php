<?php

    
    function suma($a, $b) {
        return $a + $b;
    }
    
    function resta($a, $b) {
        return $a - $b;
    }
    
    function multiplicacion($a, $b) {
        return $a * $b;
    }
    
    function division($a, $b) {
        if ($b == 0) {
            return "Error: división por cero";
        } else {
            return $a / $b;
        }
    }
    
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];
        
       
        if (!is_numeric($num1) || !is_numeric($num2)) {
            echo "Error: Los valores ingresados no son números válidos.";
        } else {
        
            switch ($operacion) {
                case "suma":
                    $resultado = suma($num1, $num2);
                    echo "Resultado de la suma: " . $resultado;
                    break;
                case "resta":
                    $resultado = resta($num1, $num2);
                    echo "Resultado de la resta: " . $resultado;
                    break;
                case "multiplicacion":
                    $resultado = multiplicacion($num1, $num2);
                    echo "Resultado de la multiplicación: " . $resultado;
                    break;
                case "division":
                    $resultado = division($num1, $num2);
                    echo "Resultado de la división: " . $resultado;
                    break;
                default:
                    echo "Operación no válida.";
            }
        }
    }
    
?>
