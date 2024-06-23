<?php

// 120
//  Напишите программу, которая сформирует следующий массив:
// [
// 	[
// 		[1, 2, 3],
// 		[1, 2, 3],
// 		[1, 2, 3],
// 	],
// 	[
// 		[1, 2, 3],
// 		[1, 2, 3],
// 		[1, 2, 3],
// 	],
// 	[
// 		[1, 2, 3],
// 		[1, 2, 3],
// 		[1, 2, 3],
// 	],
// ]


$arr = [];


for($i = 0; $i < 3; $i++){

    $arr[] = [];

    for ($j = 0; $j < 3; $j++) {

        for ($j = 0; $j < 3; $j++) {

            $arr[][] = [];

        }
    }

}

echo '<pre>';

var_dump($arr);

echo '</pre>';



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>        </title>
</head>
<body>


    <form action="57.php" method="POST">
        <textarea name="text" ></textarea>
        <input type="submit" value="Загрузить">
    </form>


    <?php foreach($arr as $r){

        $stb .= '<span> '. $r . ' </span>';

    }

    file_put_contents('text.html', $stb);

        
 ?>

    
</body>
</html>