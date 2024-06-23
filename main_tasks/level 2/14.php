<?php
 // 76 77
if(!empty($_POST['num'])){

    $cr = date_create($_POST['num']);

    $rsY = date_format($cr, 'Y');
    $rsM = date_format($cr, 'M');
    $rsD = date_format($cr, 'D');
    $rsW = date_format($cr, 'N');



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

<!-- Дана форма с инпутом. В инпут вводится дата в формате 
2025-12-31. После отправки формы выведите в первый 
абзац год, во второй абзац - месяц, в третий день. -->

<!-- Дана форма с инпутом. В инпут вводится дата в 
формате 2025-12-31. После отправки формы выведите в 
абзац день недели, соответствующий этой дате. -->

<form action="14.php" method="POST">
    <input type="date" name="num">
    <input type="submit" value="Отравить">
</form>

<p>Год: <?= $rsY ?></p>
<p>Месяц: <?= $rsM ?></p>
<p>День: <?= $rsD ?></p>
<p>Неделя: <?= $rsW ?></p>
    
</body>
</html>