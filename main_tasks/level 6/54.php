<?php

// 116
// Дана форма с текстареа. В текстареа вводится текст. 
// После отправки формы выведите 
// слова этого текста в алфавитном порядке и без дублей. 


if(!empty($_POST)){

    $date = explode(' ', $_POST['text']);

    sort($date);
    var_dump(implode(" ", $date));

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>        </title>
</head>
<body>


    <form action="54.php" method="POST">
        <textarea name="text" ></textarea>
        <input type="submit" value="Загрузить">
    </form>
    
</body>
</html>