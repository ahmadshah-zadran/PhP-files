<?php
    function generateFibonacci($n) {
        $fib = [0, 1];
        $i = 2;

        while ($i < $n) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
            $i++;
        }

        return array_slice($fib, 0, $n); 
    }

?>