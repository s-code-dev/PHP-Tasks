<?php
//124

// Сделайте функцию, которая будет возвращать массив, 
// заполненный N случайными числами из заданного 
// диапазона так, чтобы числа не повторялись. 


$arr = range(1, 10);

shuffle($arr);

var_dump( $arr );






?>