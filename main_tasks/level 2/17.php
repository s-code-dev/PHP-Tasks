<?php
 // 80
if(!empty($_POST)){

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || empty($_POST['email'])){

        $rs = 'Email некорректный';

    }elseif(strlen($_POST['nikname']) > 10 || empty($_POST['nikname'])){

        $rs = 'Nikname должен быть не более 10 символов';

    }elseif(strlen($_POST['pass']) <= 8 || empty($_POST['pass'])){

        $rs = 'Пароль должен быть более 8 символов';

    }else{

        $rs = 'Добро пожаловть '. $_POST['nikname'];

    }



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


<form action="17.php" method="POST">
    <input type="email" name="email">
    <input type="text" name="nikname">
    <input type="password" name="pass">
    <input type="submit" value="Загрузить">
</form>


<?php if($rs): ?>

    <?= $rs ?>

<?php endif; ?>
    
</body>
</html>