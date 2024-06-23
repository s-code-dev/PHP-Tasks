					
<?php
 // 33
function start(int $num) {

$newNum = (string) $num;

return (int) preg_replace('/0/', '', $newNum);

}

var_dump( start(40064500) );

 // 34

$date = '23-10-13';

function start($date){

$d = date('y-m-d');
$res = (strtotime($date)/60/60/24 - strtotime($d)/60/60/24);

return $res < 0 ? '<p>Remained</p>'. -$res : '<p>Passed</p>'. $res;
}

echo(start($date));

 // 35

function start() {
$arr = [];
$year = 1900;
while(2023 > $year){
$year += 4;

if($year > 1923){
$arr[] = $year;

}

}
return $arr;
}

var_dump( start() );

 // 36
// Сделайте функцию, которая параметром будет год и
// проверять, високосный он или нет.

function start1(int $year): bool
{

return in_array($year, start());

}

var_dump( start1( 1924) );

 // 37
// Сделайте функцию, которая будет возвращать сколько
// дней осталось до конца текущего месяца.
$d = date('d');
$m = date('m');
$r = cal_days_in_month(CAL_GREGORIAN, $m, 2023);

var_dump($r - $d);

 // 38
// Сделайте функцию, которая вернет предыдущий, текущий и следующий
// дни недели словом в виде следующего массива:

$arr = [
'next' => 'пн',
'curr' => 'вс',
'prev' => 'сб',
];

function start()
{

$i = 0;
$arr = [];

for($i = 0; $i <= 7; $i++){

if( $i === date('w') + 1){

$arr['next'] = solwe(date('w') + 1);

}if($i == date('w')){

$arr['curr'] = solwe(date('w'));

}if($i === date('w')-1){

$arr['prev'] = solwe(date('w')-1);

}

}

return $arr;

}

function solwe($param) {

switch($param){
case 1:
return 'пн';
break;
case 2:
return 'вт';
break;
case 3:
return 'ср';
break;
case 4:
return 'чт';
break;
case 5:
return 'пт';
break;
case 6:
return 'сб';
break;
case 7:
return 'вс';
break;

};

}

var_dump(array_reverse(start()));

 // 40
// Сделайте функцию, которая параметром будет
// принимать массив и удалять из него все дубли.

var_dump(array_unique($arr));

 // 41
// Сделайте функцию, которая параметром будет принимать
// массив и удалять из него все дубли, которые встречаются больше трех раз.

$arr = [1, 1, 2, 3, 2, 4, 4, 4, 5, 5, 5, 5, 6, 6, 6, 6];

function resolve($arr)
{

$a = array_keys(array_filter(array_map('start', array_count_values($arr))));
for($i = 0; $i < count($arr); $i ++){
for($j = 0; $j < count($a); $j ++){
if($a[$j] == $arr[$i]){
$arr[$i] = '';
}

}

}

return $arr;
}

function start($str)
{

return $str <= 3 ? '' : $str;

}

var_dump(array_filter(resolve($arr)));

 // 42
// Сделайте функцию, которая параметром будет принимать
// массив и удалять из него одинаковые, рядом стоящие элементы.

$arr = [1, 1, 2, 3, 2, 4, 4, 4, 5, 5, 5, 5, 6, 6, 6, 6];

function start($arr) {
}

$ar = $arr;

for($i = 0; $i < count($arr); $i++){
if($arr[$i] === $arr[$i+1]){
$ar[$i] = '';
$ar[$i+1] = '';
}

}

var_dump(array_filter($ar));

 // 43
// Сделайте функцию, которая параметром будет принимать массив
// с числами и возвращать максимальное и минимальное значение из этого
// массива в виде следующего массива:

// [
// 'max' => 9,
// 'min' => 1,
// ]

$arr = [1, 2, 3, 4, 5, 6, 2,3];

function start($arr)
{

return [
'max' => max( $arr ),
'min' => min( $arr )
];

}

var_dump( start($arr) );

 // 44
// Сделайте функцию, которая параметром будет принимать
// число и проверять, простое оно или нет.

$n = 15;

function start($num)
{

if($num % $num == 0 && $num % 1 == 0 && $num % 2 != 0 && $num % 3 != 0 && $num % 4 != 0 && $num % 5 != 0){

return 'Простое число';

}else{

return 'Непростое число';

}

}

echo start($n);

 // 45
// Сделайте функцию, которая параметром будет
// принимать число и удалять из него четные цифры.

function start($num){


$n = (string) $num;
$a = str_split($n, 1);
return array_filter(array_map(function($a){

return $a % 2 == 0 ? '' : $a;

}, $a));}


var_dump(array_values(start(52223)));


 // 46
// Сделайте функцию, которая заполнит массив N случайными
// числами из заданного промежутка.
$a = range(1, 10);
shuffle( $a );
var_dump($a);


function start(int $a, int $b): array
{
    $arr = range($a, $b);
    shuffle( $arr );
    
    return $arr;
    
}

var_dump(start(2, 5));

 // 47
// Дана переменная со строкой. Проверьте, что в эта строка представляет 
// собой число, то есть состоит только из цифр.

$num = '1232sdvsdv';
var_dump( is_numeric($num) ? 'Число' : 'Cтрока');

 // 48
// Дана переменная со строкой. Проверьте, что в эта 
// строка представляет собой дробь.

var_dump(is_float(12) ? 'Дробь' : 'Целое число');

 // 49
// Сделайте функцию, которая параметром будет принимать массив с 
// числами и возвращать второе по величине число.

$arr = range(1, 10);
shuffle($arr);
sort($arr);
var_dump($arr[count($arr)-2]);


 // 50
// Сделайте функцию, которая заполнит массив случайными латинскими буквами.

function start()
{
    $a = range('a','z');
    shuffle($a);
    var_dump($a);
    
}

start();


 // 51
// Сделайте функцию, которая параметром будет принимать дату в формате год-месяц-день, и определять, 
// существует ли такая дата или нет.

var_dump(strtotime('12-222-220'));


 // 52
// Сделайте функцию, которая сгенерирует строку заданной длины, 
// заполненную случайными латинскими буквами.


function start(){
    
    $arr = range('a', 'z');
    str_shuffle($arr);
    var_dump($arr);
    
}

start();


 // 53
// Сделайте функцию, которая параметром будет получать строку со словами, а возвращать строку 
// в верхнем регистре, состоящую из первых букв слов.

function start($str)
{
    
    $arr = explode(' ', $str);
    $r = [];
    
    for($i = 0; $i < count($arr); $i++){
        $r[] = $arr[$i][0].''.$arr[$i][1];
        
    }
    
     return strtoupper(implode(' ', $r));
    
}var_dump(start('casdcascasc sdvsd asdfvaf'));


$a = array_count_values(explode(' ', '1 2 1 2 3 5 4'), function($a){
    
    return $a > 2;
    
});

    var_dump(explode(' ', '1 2 1 2 3 5 4'));
    
$a = array_count_values(explode(' ', '1 2 1 2 3 5 4'), function(){
        
        return $a < 2;
        
    });
        
    var_dump($a );


     // 54
// Сделайте функцию, которая сгенерирует строку 
// заданной длины, заполненную случайными латинскими буквами.

function start(int $lh)
{
    $res = '';
    $str = range('a', 'z');
    for($i = 0; $i < $lh; $i++){
        $w = $str[rand(0, strlen(implode('', $str)) - 1)];
        $res .= $w;
    }
    
    return $res;
    
}

echo start(200);

 // 55
// Сделайте функцию, которая параметром будет получать строку со словами, а возвращать 
// строку в верхнем регистре, состоящую из первых букв слов.


function start( $str): string
{
    $array = explode(' ', $str);
    $res = '';
    
    foreach ($array as $arr){
        $res .= strtoupper(substr($arr, 0, 1));
        
        
    }
    
    return $res;
    
}

echo start('hello word');


?>