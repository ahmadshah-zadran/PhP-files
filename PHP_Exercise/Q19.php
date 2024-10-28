<?php
    function mergeStudentScores($array1, $array2) {
        foreach ($array2 as $student => $score) {
            if (isset($array1[$student])) {
            
                $array1[$student] = max($array1[$student], $score);
            } else {
                $array1[$student] = $score;
            }
        }
        return $array1;
    }
?>