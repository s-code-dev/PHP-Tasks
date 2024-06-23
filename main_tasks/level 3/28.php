<?php 
 // 88
// Дана форма с текстареа. В него вводится текст со знаками препинания. После 
// отправки формы запишите каждое предложение из текста в свой тег li. 


if(!empty($_POST)){
    $num = $_POST['num'];

    $arr = explode('.', $num);

    // var_dump( explode('.', $num));

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


<form action="28.php" method="POST">
    <textarea name="num" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Загрузить">
</form>
<ul>
<?php foreach($arr as $a): ?>
    <li><?= $a ?></li>
<?php endforeach; ?>
</ul>    
</body>
</html>

