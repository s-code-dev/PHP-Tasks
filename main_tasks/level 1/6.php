<?php

// 6

$arr = [1.456, 2.125, 3.32, 4.1, 5.34];
var_dump(round($arr[1], 0));

// 7

$array = ['http://sdavcsdav', 'sdvsdfvsdfvb', 'http://С‹РІС„РјС‹РІРјС‹РІРј'];

preg_match('/^http:\/\/+/', $array[0], $matches );

var_dump($matches);

// 8


$arrNew = [];


foreach($array as $arr){

    preg_match('/^http:\/\/+/', $arr, $matches );

    if($matches[0] === 'http://'){

        $arrNew[] =  $arr;

    }



}

var_dump($arrNew);


// 9

$array = ['htmlwdevswdvsdfv', 'С‹РІРјС‹РІРјС‹РІРјhtml', 'С‹РІРјС‹РІРјС‹htmlС‹РІРјС‹РІРј', 'asdvcdasvsdv'];

$newArr = [];
foreach($array as $arr){

    preg_match('/html/', $arr, $matches);

    if($matches[0]  === 'html'){

        $newArr[] = $arr;

    }

}

var_dump($newArr);

// 10

$arr = [120, 200, 300, 400];

$array = array_map(function($res){

    return ( ( $res * 10 ) / 100 ) + $res;

}, $arr );


$run = (range(1, 100));
$arr = [];
$new = [];
for($i=0; $i < floor((count($run))/2); $i++){

    $arr[] = $run[$i];
    $arr[] = $run[$i + 1];
    $new[] = $arr ;
    array_splice($arr, 0);


}


echo '<pre>';
    var_dump($new);
echo '</pre>';


$arr = '12,34,56';

var_dump(array_sum(explode(',', $arr)));


$date = '2025-12-31';

var_dump(explode('-', $date));

// 11

$str = 'casdc564656scacvas6ca45s6c';

preg_match('/\d/', $str, $matches);

var_dump($matches);

// 12

$arr = ['name'=> 'Р�РІР°РЅ', 'age' => '12'];

echo '<pre>';

var_dump(array_values($arr));
var_dump(array_keys($arr));

echo '</pre>';

$str = 'abcde';
$newArr = [];

$arr = str_split($str, 1);
// // var_dump(str_split($str, 1));

for($i = 0; $i < count($arr); $i++){
    if($i % 2 != 0){

        $newArr[] = strtoupper($arr[$i]);

    }else{

         $newArr[] = $arr[$i];

    }

   

}

    var_dump(implode('', $newArr));

// 13

    $str = "abcde";

    for ($i = 0; $i < strlen($str); $i+=2) {
        $char = $str[$i];
        $str[$i] = strtoupper($char);
    }

    echo $str;
    $num = 0;
    $str = 'abcdefg';
    $st = 'abcdefg';
    $rt = null;
    $len = strlen($str);
    for($i = 0; $i < $len; $i++){

        $num++;

        if($num == 3){

            $rt = str_replace($st[$i], '', $st);
            $num = 0;
        }

    }

    var_dump($rt);


// 14

$arr = [1, 2, 3, 4, 5, 6];
$i1 = 0;
$i2 = 0;
foreach($arr as $r){
    if($r%2 === 0){

        $i1 += $r;

    }else{

        $i2 += $r;


    }

}

echo $i1/$i2;
echo 12/9;

$num = [123, 456, 789];
$new = [];


foreach($num as $n){
    $i = (string) $n;
    $new[] = (integer) strrev($i);

}

var_dump( $new );



// 15

$str = '1234567';
$arr = str_split($str, 1);
$new = '';
$num = 0;

for($i = 0; $i < count(str_split($str, 1)); $i++){

    if($i === 0){

        $new .= $arr[$i] . ' ';

    }else{
        $num ++;
        $new .= $arr[$i];

        if( $num % 3 === 0 ){

            $new .= ' ';

        }
        
    }

}


 var_dump($new);



 // 16

$str = 'AbCdE';
$new = '';


for($i = 0; $i < strlen($str); $i ++){



    if($i % 2 === 0){

          $new .= strtolower($str[$i]);


    }else{

        $new .= strtoupper($str[$i]);

    }

}

echo $new;

 // 17

$arr = [1, 2, 3, 4, 5, 6];
$new = [];

for($i = 0; $i < count($arr) - 1; $i++){

    $new[] = $arr[$i].''.$arr[$i+1];

    $i = $i+1;

}

var_dump($new);

$str = 'aaa bbb ccc eee fff';
$arr = explode(' ', $str );
$new = [];

for($i = 0; $i < count($arr); $i++){

    if($i % 2 != 0){

        $new[] = ucfirst($arr[$i]);




    }else{

        $new[] = $arr[$i];

    }

}

var_dump($new);


 // 18


$str = 'a bc def ghij';
$arr = explode(' ', $str );
$new = [];


$arr1 = [1, 2, 3];
list($a, $b, $c) = ['a', 'b', 'c'];


var_dump([1, 2, $a, $b, $c, 3]);

$a = [1, '', 2, 3, '', 5];

unset( $a[1] );

var_dump($a);

 // 19


$arr = [

	[2, 1, 4, 3, 5],
	[3, 5, 2, 4, 1],
	[4, 3, 1, 5, 2],
];

sort( $arr[0] );

print_r( $arr[0] );

sort( $names ); // simple alphabetical sort

print_r($names);

 // 20
$arr1 = [1, 2, 3];
$arr2 = [1, 2, 3, 4, 5];

var_dump( array_splice($arr2, 0, 3) );


 // 21

$arr = range(1, 100);



for($i = 0; $i < count( $arr ); $i++){
    if($i%5 === 0){
        unset($arr[$i]);
    }

}

var_dump( $arr );

$num = 5;
$str = '';


while($num > 0){
    $num --;

    $str .= '0';



}

echo $str;

 // 22

$arr = 'aaa bbb ccc eee fff';



$ar = explode(' ', $arr);


for($i = 0; $i < count($ar); $i ++){

    unset($ar[$i]);
    var_dump($ar[$i]);

    if($i = 0){

        continue;

    }else{
        unset($ar[$i]);
    }
}

echo implode(' ', $ar);


var_dump(strrev('abcba') === 'abcba');


 // 23

$arr = [
	[
		[11, 12, 13],
		[14, 15, 16],
		[17, 17, 19],
	],
	[
		[21, 22, 23],
		[24, 25, 26],
		[27, 27, 29],
	],
	[
		[31, 32, 33],
		[34, 35, 36],
		[37, 37, 39],
	],
];


$num = 0;


for($i = 0; $i < count($arr); $i++){

    // echo '<pre>';

    // var_dump( $arr[$i] );

    // echo '</pre>';

    for($j = 0; $j < count($arr[$i]); $j++){

        for($p = 0; $p < count($arr[$i]); $p++){

            echo '<pre>';

            // var_dump($arr[$i][$j]);

            $num += $arr[$i][$j][$p];

            echo '</pre>';



    }



    }
}


echo $num;

 // 24

$arr = [1, 2, 3, 4, 5, 6];
$array = [];


for($i = 0; $i < count($arr); $i++){
    $array[] = $arr[$i+1];
    $array[] = $arr[$i];
    $i++;

}

var_dump( $array );

 // 25


$arr = range(1, 100);
$array = [];

for($i = 0; $i < count($arr); $i++){

    if($arr[$i] % 10 === 0){


        $array[] = $arr[$i];



    }

}

var_dump( $array );


 // 26


$tr = false;


for($i = 0; $i < count( $arr ); $i++){


    for($j = 0; $j < count( str_split( ( string ) $arr[$i] ) ); $j++){

        if(str_split( ( string ) $arr[$i] )[$j] === '3'){

            $tr = true;

        }



    }






}

var_dump($tr);


 // 27

$nam = 35142;
$n = str_split( $nam, 1 );
sort( $n );


var_dump( implode('', $n)  );

 // 28

$num = range( 1, 5 );

var_dump( implode('-', range( 1, 5 ))  );

 // 29


$date = date('w');

var_dump( $date );

 // 30

$str = match( $date ){

    '1' => 'РџРѕРЅРµРґРµР»СЊРЅРёРє',
    '2' => 'Р’С‚РѕСЂРЅРёРє',
    '3' => 'РЎСЂРµРґР°',
    '4' => 'Р§РµС‚РІРµСЂРі',
    '5' => 'РџСЏС‚РЅРёС†Р°',
    '6' => 'РЎСѓР±Р±РѕС‚Р°',
    '7' => 'Р’РѕСЃРєСЂРµСЃРµРЅРёСЏ',

};

echo $str;



var_dump( microtime(true)/60/60/24 );


 // 31

$str = 'hELLO WORD';

var_dump(substr($str, 0, 5));


 // 32

$date = new DateTime( '2006-12-12' );
$date -> modify( '+1 day' );
echo $date -> format( 'Y-m-d' );


echo 'Hello word';





?> 