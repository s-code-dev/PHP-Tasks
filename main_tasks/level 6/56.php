<?php

// 118
// Дана форма с текстареа и кнопкой. Юзер вводит текст в форму. После 
// отправки формы запишите введенный текст в какой-нибудь файл.  


if(!empty($_POST)){

    file_put_contents('text.txt', $_POST['text'] );

   

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


    <form action="56.php" method="POST">
        <textarea name="text" ></textarea>
        <input type="submit" value="Загрузить">
    </form>

    
</body>
</html>