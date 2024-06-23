<!-- Дана форма с селектом. Сделайте так, чтобы после отправки 
формы селект сохранял выбор пользователя.  -->

<?php
 // 83
if(!empty($_POST)){

    $rst = $_POST['rst'];

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


<form action="20.php" method="POST">

<select name="rst" >
    <option value="i" <?= $rst == "i" ? 'selected' : '' ?>>Иван</option>
    <option value="b"<?= $rst == "b" ? 'selected' : '' ?>>Боря</option>
    <option value="v" <?= $rst == "v" ? 'selected' : ''  ?>>Вася</option>
</select>

<input type="submit" value="Загрузить">
</form>
    
</body>
</html>