<?php
    function evaluateConditions($conditions) {
        $result = true;
        foreach ($conditions as $condition) {
            $result = $result && $condition;
        }
        return $result;
    }
?>