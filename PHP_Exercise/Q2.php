<?php
define("EXCHANGE_RATE", 0.85); 

function convertCurrency($amounts, $direction) {
    $convertedAmounts = [];
    foreach ($amounts as $amount) {
        if ($direction == "USD_TO_EUR") {
            $convertedAmounts[] = $amount * EXCHANGE_RATE;
        } elseif ($direction == "EUR_TO_USD") {
            $convertedAmounts[] = $amount / EXCHANGE_RATE;
        }
    }
    return $convertedAmounts;
}
?>