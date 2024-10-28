
<?php
    function createOperation($operation) {
        switch ($operation) {
            case 'add':
                return function($a, $b) {
                    return $a + $b;
                };
            case 'subtract':
                return function($a, $b) {
                    return $a - $b;
                };
            case 'multiply':
                return function($a, $b) {
                    return $a * $b;
                };
            case 'divide':
                return function($a, $b) {
                    if ($b == 0) {
                        return 'Error: Division by zero';
                    }
                    return $a / $b;
                };
            default:
                return null; // Invalid operation
        }
    }

    // Example usage
    $operationName = 'multiply'; // Change this to 'add', 'subtract', 'divide' for different operations
    $dynamicFunction = createOperation($operationName);

    if ($dynamicFunction) {
        $num1 = 10;
        $num2 = 5;
        $result = $dynamicFunction($num1, $num2);
        echo "The result of $operationName $num1 and $num2 is: $result";
    } else {
        echo "Invalid operation: $operationName";
    }
?>
