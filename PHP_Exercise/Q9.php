<?php
    function evaluatePurchase($age, $membership, $amount) {
        return ($age > 18 ? ($membership == "premium" ? "20% discount" : "10% discount") : "No discount");
    }
?>