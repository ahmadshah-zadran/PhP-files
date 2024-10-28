<?php
    function filterAndReverseWords($words) {
        $filteredWords = array_filter($words, function($word) {
            return !preg_match('/[aeiouAEIOU]/', $word);  
        });

    
        $reversedWords = array_map('strrev', $filteredWords);
        return $reversedWords;
    }

?>