<?php
    function printPattern($size) {
        for ($i = 1; $i <= $size; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $j . " ";
            }
            echo "\n";
        }
    }
?>