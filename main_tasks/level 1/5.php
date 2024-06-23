<?php
header('Content-Type: text/html; charset=utf-8');
// 5
// Дана строка. Если в этой строке более одного символа, 
// выведите в консоль предпоследний символ этой строки.


$str = 'Hello word';


var_dump(strlen($str) > 1 ? $str[strlen($str) - 2] : '');


// Даны два целых числа. Проверьте, что первое число без остатка делится на второе.

$num1 = 10;
$num2 = 10;

var_dump($num1 % $num2 === 0);


// Выведите в консоль все целые числа от 1 до 100.

$num = 0;

while($num < 100){

    $num++;

    echo '<pre>';
    var_dump($num);
    echo '</pre>';



}

// Дан массив с числами. Найдите сумму квадратов элементов этого массива.


$array = [1, 3, 5];

$res = 0;
foreach($array as $arr){
    
    $res += $arr**2;


    

}

echo $res;


// Дан массив с числами. Найдите сумму квадратных корней элементов этого массива.


$array = [1, 3, 5];

$res = 0;
foreach($array as $arr){
    
    $res += sqrt($arr);



    

}

echo round($res, 2);

$str = 'abcde';


var_dump(array_values(str_split($str, 1))) ;


var_dump(str_split(preg_replace('/ /', '', 'Hello word gg'), 1));






?>