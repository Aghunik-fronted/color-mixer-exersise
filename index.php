<?php

$colorOne = "red";
$colorTwo = "white";


$c1 = strtolower($colorOne);
$c2 = strtolower($colorTwo);

$allowedColors = ['yellow', 'red', 'blue', 'white', 'black'];

if (!in_array($c1, $allowedColors) || !in_array($c2, $allowedColors)) {
    $result = 'unknown color';
} 
elseif ($c1 === $c2) {
    $result = $c1;
} 
elseif ($c1 === 'white' || $c2 === 'white') {
    $otherColor = ($c1 === 'white') ? $c2 : $c1;
    $result = "light-" . $otherColor;
}
elseif ($c1 === 'black' || $c2 === 'black') {
    $otherColor = ($c1 === 'black') ? $c2 : $c1;
    $result = "dark-" . $otherColor;
}
else {
    $combination = $c1 . "+" . $c2;

    switch ($combination) {
        case 'blue+red':
        case 'red+blue':
            $result = 'violet';
            break;

        case 'blue+yellow':
        case 'yellow+blue':
            $result = 'green';
            break;

        case 'red+yellow':
        case 'yellow+red':
            $result = 'orange';
            break;

        default:
            $result = 'unknown color';
            break;
    }
}

echo "Result: " . $result;

?>