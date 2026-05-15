<?php

$colorOne = "yellow";
$colorTwo = "red";


$c1 = strtolower($colorOne);
$c2 = strtolower($colorTwo);

if ($c1 === $c2) {
    $result = $c1;
} 
elseif ($c1 === 'white' || $c2 === 'white') {
    if ($c1 === 'white') {
        $otherColor = $c2;
    } else {
        $otherColor = $c1;
    }
    $result = "light-" . $otherColor;
}
elseif ($c1 === 'black' || $c2 === 'black') {
    if ($c1 === 'black') {
        $otherColor = $c2;
    } else {
        $otherColor = $c1;
    }
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