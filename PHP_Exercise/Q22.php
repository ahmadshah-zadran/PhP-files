
<?php
    // Function that accepts an array and a callback
    function transformArray($array, $callback) {
        $result = [];
        foreach ($array as $item) {
            $result[] = $callback($item); // Apply the callback to each element
        }
        return $result;
    }

    // Sample array of numbers
    $numbers = [1, 2, 3, 4, 5];

    // Define a closure to be used as a callback
    $callback = function($number) {
        return $number * $number; // Square each number
    };

    // Transform the array using the closure
    $squaredNumbers = transformArray($numbers, $callback);

    // Display the result
    echo "Original Numbers: " . implode(', ', $numbers) . "\n";
    echo "Squared Numbers: " . implode(', ', $squaredNumbers);
?>
