<?php
    function simpleCalculator($input) {
        $parts = explode(" ", $input);
        $num1 = (float) $parts[0];
        $operator = $parts[1];
        $num2 = (float) $parts[2];

        
        switch ($operator) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '*':
                return $num1 * $num2;
            case '/':
                if ($num2 != 0) {
                    return $num1 / $num2;
                } else {
                    return "Division by zero is not possible.";
                }
            default:
                return "Unsupported operation.";
        }
    }
?>