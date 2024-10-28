
<?php
    // Higher-order function to apply a callback to each element in a 2D array
    function transform2DArray($array, $callback) {
        return array_map(function($subArray) use ($callback) {
            return array_map($callback, $subArray);
        }, $array);
    }

    // Sample 2D array of numbers
    $numbers = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    // Define a callback function (closure) to square each number
    $callback = function($num) {
        return $num * $num; // Square the number
    };

    // Transform the 2D array using the higher-order function
    $transformedArray = transform2DArray($numbers, $callback);

    // Display the original and transformed arrays
    echo "Original 2D Array:\n";
    foreach ($numbers as $row) {
        echo implode(', ', $row) . "\n";
    }

    echo "\nTransformed 2D Array (Squared Values):\n";
    foreach ($transformedArray as $row) {
        echo implode(', ', $row) . "\n";
    }
?>
