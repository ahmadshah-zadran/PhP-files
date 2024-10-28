<?php
    function reverseWordsInSentences($paragraph) {
        $sentences = explode(".", $paragraph);
        $reversedSentences = [];
        foreach ($sentences as $sentence) {
            $words = explode(" ", trim($sentence));
            $reversedWords = array_reverse($words);
            $reversedSentences[] = implode(" ", $reversedWords);
        }
        return implode(". ", $reversedSentences) . ".";
    }
?>