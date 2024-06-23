<?php

 // 71 72

if($_POST['num'] != null){

    echo strlen($_POST['num']);



}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

    .elem1{
        border: 1px solid red;
    }

    .elem2{
        border: 1px solid green;
    }

</style>
<body>
<!-- Дана форма с кнопкой и инпутом. В инпут вводится строка. 
По нажатию на кнопку определите, сколько символов в введенной строке. -->

<form action="10.php" method="POST">

    <input type="text" name="num" class="<?= $_POST['num'] ?? $elem != 2 ? 'elem1' : 'elem2'?>">
    <input type="submit" value="Отправить">

</form>

<form action="10.php" method="POST">

    <input type="title" name="num">
    <input type="number" name="num[]">
    <input type="number" name="num[]">
    <input type="number" name="num[]">
    <input type="number" name="num[]">
    <input type="submit" value="Отправить">

</form>
    
</body>
</html>


<?php
	$data = [1, 2, 3, 4, 5];


    foreach($data as $d){
        echo "<input value=$d>";
    }

    // Дан массив с числами. По заходу на страницу запишите в 
    // инпут все числа из массива, разделив их запятыми.
?>
