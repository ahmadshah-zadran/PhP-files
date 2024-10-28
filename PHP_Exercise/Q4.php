<?php
    function detectDataType($variable) {
        if (is_resource($variable)) {
            throw new Exception("Invalid data type.");
        }
        return gettype($variable);
    }
?>