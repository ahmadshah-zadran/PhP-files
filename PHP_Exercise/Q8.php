<?php
    function calculateDiscount($years, $isPremium) {
        $discount = 0;
        if ($years > 5) {
            $discount = 30;
        } elseif ($years >= 3) {
            $discount = 20;
        } else {
            $discount = 10;
        }
        
        if ($isPremium) {
            $discount += 10;
        }
        
        return $discount;
    }
?>