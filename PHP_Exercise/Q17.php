<?php
    function filterGreaterThan($array, $threshold) {
        return array_filter($array, function($value) use ($threshold) {
            return $value > $threshold;
        });
    }
?>