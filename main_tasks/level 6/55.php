<?php

// 117
// Дана форма с текстареа. В текстареа 
// вводится текст со словами. По отправки формы 
// сделайте таблицу, в первой колонке которой будут 
// слова из текста, во второй колонке - количество раз, 
// которое это слово встречается, а в 
// третьей - процентное содержание этого слова в текста.  


if(!empty($_POST)){

    $rst = array_filter( array_count_values( explode(" ", $_POST['text'] ) ));
    $vl[] =  $rst;
    var_dump($vl[0]);

   

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


    <form action="55.php" method="POST">
        <textarea name="text" ></textarea>
        <input type="submit" value="Загрузить">
    </form>

    <table border="1">
        <?php foreach($vl[0] as $vlu => $v): ?>
        <tr>
            <td><?php 
            if($vlu == ""){  
                continue; 
            }else 
            { echo $vlu; 
            }?></td>

             <td><?= $v ?></td>
            
        </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>