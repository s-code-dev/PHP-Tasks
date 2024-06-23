<?php
//96
//  Дан массив:
$arr = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9],
        ];

// По заходу на страницу создайте таблицу, заполненную данными из 
// этого массива. 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<body>

<table>

<?php foreach($arr as $r ): ?>

    <tr>

        <?php foreach($r as $f ): ?>
            <td><?= $f ?></td> 
        <?php endforeach; ?>

    </tr>

<?php endforeach; ?>

</table>
    
</body>
</html>