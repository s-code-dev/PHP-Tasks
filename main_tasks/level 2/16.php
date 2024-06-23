<?php
 // 79
if(!empty($_POST['num'])){

    var_dump( str_word_count($_POST['num']) );



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
<!-- Дана форма с текстареа. В него вводится 
текст со словами. После отправки формы 
выведите в абзац количество слов во этом тексте. -->
<form action="16.php" method="POST">
    <textarea name="num" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Загрузить">
</form>
    
</body>
</html>