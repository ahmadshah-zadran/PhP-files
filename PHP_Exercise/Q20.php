<?php
    function isPalindrome($string) {
    
        $string = strtolower(str_replace(' ', '', $string));

    
        if (strlen($string) <= 1) {
            return true;
        }
        
        if ($string[0] === $string[strlen($string) - 1]) {
            return isPalindrome(substr($string, 1, -1));
        } else {
            return false;
        }
    }
?>