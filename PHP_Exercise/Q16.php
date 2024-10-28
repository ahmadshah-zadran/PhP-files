<?php
    function findTopStudent($students) {
        $topStudent = '';
        $highestAverage = 0;

        foreach ($students as $student => $scores) {
            $average = array_sum($scores) / count($scores);
            if ($average > $highestAverage) {
                $highestAverage = $average;
                $topStudent = $student;
            }
        }

        return ["name" => $topStudent, "average" => $highestAverage];
    }

?>