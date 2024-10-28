<?php
    function fizzBuzzOrPrime($number) {
        if (isPrime($number)) {
            return "Prime";
        } elseif ($number % 3 == 0 && $number % 5 == 0) {
            return "FizzBuzz";
        } elseif ($number % 3 == 0) {
            return "Fizz";
        } elseif ($number % 5 == 0) {
            return "Buzz";
        }
    }
    
    function isPrime($number) {
        if ($number < 2) return false;
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) return false;
        }
        return true;
    }

?>