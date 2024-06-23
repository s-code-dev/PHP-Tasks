<?php

//93
//  Даны переменные:

	$rows = 8;
	$cols = 15;


// По заходу на страницу сгенерируйте HTML таблицу, 
// количество рядов и колонок 
// будет взято из приведенных выше переменных. 

//94
// По заходу на страницу сгенерируйте HTML таблицу с 
// заданным количеством рядов и колонок, 
// чтобы в ячейках стояли их порядковые номера.

//95
// По заходу на страницу сгенерируйте HTML таблицу с 
// заданным количеством рядов и колонок так, чтобы в 
// ячейках стояли номера их рядов и колонок. 







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
    table, th, td {
        border:1px solid black;
    }
</style>


<table  >
    <?php for($i = 0; $i < $rows; $i++): ?>
    <tr>
        <?php for($j = 1; $j <= $cols; $j++): ?>
            <td><?= $j ?></td>
        <?php endfor ?>
    </tr>
    <?php endfor ?>
</table>


<table  >
    <?php for($i = 1; $i <= $rows; $i++): ?>
    <tr>
        <?php for($j = 1; $j <= $cols; $j++): ?>
            <td>ряд: <?= $i ?> колонка: <?= $j ?></td>
        <?php endfor ?>
    </tr>
    <?php endfor ?>
</table>


    
</body>
</html>