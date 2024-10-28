<?php
    function generateAndSum($size) {
        $randomNumbers = [];
        $sum = 0;
        
    
        for ($i = 0; $i < $size; $i++) {
            $randomNumbers[] = rand(1, 100);
        }

    
        for ($i = 0; $i < $size; $i++) {
            if ($i % 2 == 1) {
                continue;
            }
            $sum += $randomNumbers[$i];
        }
        return $sum;
    }


?>