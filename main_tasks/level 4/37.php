<?php

//99
// Дана форма с текстареа. В текстареа вводится текст. Получите первое слово каждого 
// предложения в тексте и выведите на экран.


if(!empty($_POST)){

    $sentences = explode('. ', $_POST['txt']);
    foreach ($sentences as $sentence) {
        $firstWord = strpos($sentence, ' ') + 1;
        echo $firstWord . '. ';
    
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

<form action="37.php" method="POST">

<textarea name="txt"  cols="30" rows="10"><?= $_POST['txt'] ?? $_POST['txt'] ?></textarea>
<input type="submit" value="Загрузить">
</form>
    
</body>
</html>