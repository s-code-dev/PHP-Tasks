<?php 

 // 56

// Сделайте функцию, которая параметром будет 
// принимать секунды, а возвращать количество дней, часов, 
// минут и секунд, соответствующих этим секундам, в виде следующего массива:

[
    'd' => 12,
    'h' => 10,
    'm' => 59,
    's' => 59,
]


function start(int $sec): array
{
    return [
        
        'd' => date('d', $sec),
        'h' => date('i', $sec),
        'm' => date('m', $sec),
        's' => date('s', $sec),
        
    ];
    
}

var_dump(start(1234234234));


 // 57
// Сделайте функцию, которая параметром будет принимать текст со словами, а возвращать текст, 
// в котором эти слова будут отсортированы в алфавитном порядке.\

$arr = ['b', 'a'];
sort($arr);

var_dump($arr);


function start($str)
{
    $ar = str_split($str, 1);
    $new = [];
    
    foreach ($ar as $a) {
        if($a === ' '){
            
            continue;
            
        }else{
            
            array_push($new, $a);
            
        }
      
    }
    
    return $new;
    
}

$ar = start('helloab word');

sort($ar);

var_dump(implode('', $ar));


 // 58
// Сделайте функцию, которая будет возвращать случайное число. Функция 
// не должна возвращать одно и тоже число два раза подряд.


function start($random = 1){
    
    
    
    if($random == (int) $_COOKIE['num']){
        
        $random = rand(1, 2);
        
        start($random);
        
    }else{
        
        setcookie('num', $random, '/', 0);
        
        return $random;
    }
    
    
}

var_dump( start() );

 // 59
// Сделайте функцию, которая параметром будет 
// принимать два массива и возвращать массив их общих элементов.


function start($arr1, $arr2){


    return array_merge($arr1, $arr2);


}

$arr1 = [1, 5, 6, 4]; 
$arr2 = [1, 3534, 35435, 43534]; 

var_dump( start($arr1, $arr2) ); 


 // 60
// Сделайте функцию, которая будет возвращать случайное число. Функция не должна 
// озвращать одно и тоже число два раза подряд.

 // 61
// Сделайте функцию, которая параметром будет принимать массив и 
// элемент и возвращать следующий за ним элемент. Смотрите пример:

$arr = [1, 3534, 35435, 43534];

func($arr, 1); // 2
func($arr, 4); // 5
func($arr, 5); // 1


function func($arr, $num)
{


    echo $arr[$num];


}


 func($arr, 1)


 // 62
// Сделайте функцию, которая параметром будет принимать массив 
// и возвращать случайный элемент этого массива.


function func( $arr )
{

    return $arr[array_rand($arr)];

}


var_dump(func( $arr ));
var_dump();

 // 63
// Сделайте функцию, которая параметром будет принимать массив и возвращать 
// массив из N случайных элементов этого массива.


function func( $arr )
{

    shuffle( $arr );

    return $arr;

}


var_dump(func( $arr ));


 // 64
// Сделайте функцию, которая параметром будет принимать 
// массив и возвращать случайный элемент этого массива так, чтобы 
// одинаковые элементы не возвращались два раза подряд.


$arr = [1, 3534, 35435, 43534];

function func( $arr, $gh = null )
{
    $num = $arr[array_rand($arr)];

    if($gh == null){

        func( $arr, $num );

    }if($gh === $num){

        func( $arr, $num );
        
    }if($gh != $num){

        return $num;
    }

}

var_dump( func( $arr ) );

 // 65
// Сделайте функцию, которая заполнит массив N 
// случайными числами из заданного промежутка так, 
//  чтобы в массиве не было подряд двух одинаковых чисел.

 // 66
// Сделайте функцию, которая заполнит массив N случайными числами 
// из заданного промежутка так, чтобы числа не повторялись.



function start($a, $b){

    $ft = range($a, $b);

    shuffle($ft);

    return $ft;

}

var_dump(start(2, 9));


 // 67
// Сделайте функцию, которая будет возвращать 
// сколько дней осталось до ближайшего 29 февраля.


function start($dt = 0)
{
  
        $rt = date("Y") + $dt;
        $df = substr($rt, 2, 3);
        $realDate = date("y-m-d");
        $ht = "$df-02-29";


 
    if(strtotime($ht) <  strtotime($realDate)){

        $dt++;
        start( $dt );
     

        

    }else{

        $res = (strtotime($ht) - strtotime($realDate));
        var_dump($res);


        // return $res/60/60/24;

    }
    
}

var_dump(start());


function start($dt = 0)
{
  
        $rt = date("Y") + $dt;
        $df = substr($rt, 2, 3);
        $realDate = date("y-m-d");
        $ht = "$df-02-29";
 
    if(strtotime($ht) < strtotime($realDate)){

        $dt++;
        
        return start( $dt );
     
    }else{

        $res = (strtotime($ht) - strtotime($realDate));
     
        return $res/60/60/24;

    }
    
}

var_dump(start());

 // 68
// Сделайте функцию, которая параметром будет принимать массив чисел и возвращать массив 
// общих делителей всех чисел из переданного массива.

$array = [10, 2, 5];

function start(array $array): array
{
    
    $rt = [];
    
    
    foreach ($array as $arr){
        while ($arr > 0 ){
            $i = $arr --;
            if($arr / $i){ 
                $rt[] = $arr;
            }
            
        }
    }
    
    
    return array_unique($rt);
    
}

var_dump( start($array) );

 // 69
// Сделайте функцию, которая параметром будет принимать двухмерный массив чисел 
// и возвращать массив максимальных чисел в каждом подмассиве.

$arr = [
    [12,1212,21],
    [2121, 212, 2142]
];

function start($arr)
{
    
    return array_sum($arr[0]) < array_sum($arr[1]) ? array_sum($arr[1]) : array_sum($arr[0]);
    
}

var_dump(start($arr));


 // 70
// Дан текст со словами. Запишите все слова этого текста в 
// специальный объект. Ключами в этом объекте будут буквы, 
// а значениями - массивы слов, начинающихся на эти буквы.

$str = 'Дан текст со словами. Запишите все слова этого текста в
специальный объект. Ключами в этом объекте будут буквы,
а значениями - массивы слов, начинающихся на эти буквы.';

$array = explode(' ', $str);

$arrNew = [];

foreach ($array as $arr){
    
    $arrNew[mb_substr($arr, 0, 1)] = $arr;
    
}

var_dump($arrNew);








?>