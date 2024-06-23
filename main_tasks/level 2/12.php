<?php

 // 74

if(!empty($_POST['num'])){

    var_dump(substr($_POST['num'],  strlen($_POST['num']) - 1));



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
<!-- Дана форма с инпутом. Сделайте так, чтобы после 
отправки формы в инпуте оставался введенный текст. -->
<form action="12.php" method="POST">
    <input type="text" name="num" value="<?= $_POST['num'] ?? $_POST['num'] ?>">
    <input type="submit" value="Загрузить">
</form>
    
</body>
</html>