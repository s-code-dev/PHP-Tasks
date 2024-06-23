<?php

// 111
// По заходу на страницу выведите в абзац 
// название дня недели последнего дня текущего месяца. 


$mount = date('Y-m-d');
$getMountOne = new \DateTime($mount);
$dt = $getMountOne->format('t');
$getMountTwo = new \DateTime(date("Y-m-$dt"));


switch($getMountTwo->format('w')){
    case 0: 
        echo 'вс';
    break;
    case 1: 
        echo 'пн';
    break;
    case 2: 
        echo 'вт';
    break;
    case 3: 
        echo 'ср';
    break;
    case 4: 
        echo 'чт';
    break;
    case 5: 
        echo 'пт';
    break;
    case 6: 
        echo 'сб';
    break;
   
}

?>