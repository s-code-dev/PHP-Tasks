<?php
 // 88
// Дана форма с чекбоксом. Сделайте так, чтобы после отправки 
// формы чекбокс сохранял выбор пользователя. 




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="26.php" method="POST">
    <input type="checkbox" name="num1" <?=  !empty($_POST['num1']) ? 'checked' : ''  ?> >
    <input type="checkbox" name="num2" <?=  !empty($_POST['num2']) ? 'checked' : ''  ?> >
    <input type="checkbox" name="num3" <?=  !empty($_POST['num3']) ? 'checked' : ''  ?> >
    <input type="checkbox"  name="num4"  <?=  !empty($_POST['num4']) ? 'checked' : ''  ?> >
    <input type="submit" value="Загрузить">
</form>
</body>
</html>