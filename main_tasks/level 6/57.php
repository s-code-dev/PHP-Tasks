<?php

// 119
// Дан текстовый файл со словами. Напишите программу, 
// которая обернет каждое слово в 
// свой тег span. Результат запишите в новый файл.  


if(!empty($_POST)){

   $arr = explode ( " ", $_POST['text'] );
   $stb = '';
   $res = [];

   

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


    <form action="57.php" method="POST">
        <textarea name="text" ></textarea>
        <input type="submit" value="Загрузить">
    </form>


    <?php foreach($arr as $r){

        $stb .= '<span> '. $r . ' </span>';

    }

    file_put_contents('text.html', $stb);

        
 ?>

    
</body>
</html>