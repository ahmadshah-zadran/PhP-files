<?php
    function findPrimes($n) {
        $primes = [];

        for ($i = 2; $i <= $n; $i++) {
            $isPrime = true;
            for ($j = 2; $j <= sqrt($i); $j++) {
                if ($i % $j == 0) {
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) {
                $primes[] = $i;
            }
        }

        return $primes;
    }
?>