<?php
 // 86
// Дана форма с инпутом. В инпут через запятую 
// вводятся числа. После отправки формы найдите 
// сумму введенных чисел и выведите ее в абзац. 

if(!empty($_POST)){

    $arr = explode(',', $_POST['num']);

    echo array_sum($arr);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="23.php" method="POST">
    <input type="text" name="num">
    <input type="submit" value="Загрузить">
</form>
    
</body>
</html>