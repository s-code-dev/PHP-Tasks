<?php
//127

// Дан текстовый файл. Дана форма с инпутом. В инпут вводится слово. По отправке формы проверьте, есть ли данное 
// слово в файле. Результат выведите в браузер.  

if($_POST['txt']){

    $txt = fopen('test.txt', 'r+');
    $tr = '';
    while (!feof($txt)) {

        $tr .= fgets($txt);

    }

    $txinp = $_POST['txt'];

    preg_match("/$txinp/", $tr, $matches);

    if($matches){

        echo 'Слово есть в файле';

    }else{

        echo 'Слова нет в файле';


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


<form action="66.php" method="POST">
    <input type="text" name="txt">
    <input type="submit" value="Загрузить">
</form>
    
</body>
</html>