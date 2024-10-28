<?php
function processInputs($input1, $input2) {
    if (is_numeric($input1) && is_numeric($input2)) {
        return $input1 * $input2;
    }
    elseif (is_string($input1) || is_string($input2)) {
        return $input1 . $input2;
    }
    elseif (is_string($input1) && is_string($input2)) {
        $inputs = [$input1, $input2];
        sort($inputs);
        return implode(", ", $inputs);
    }
}
?>
