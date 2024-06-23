<?php

// 115
// Дана форма с двумя инпутами. В инпуты вводятся даты. 
// Выведите в абзац, сколько дней между введенными датами. 



if(!empty($_POST)){
    $d1 = $_POST['n1'];
    $d2 = $_POST['n2'];

    $item = strtotime( $d1 ) - strtotime( $d2 );


    echo $item < 0  ?  -$item/60/60/24  :  $item/60/60/24 ;

    

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


<form action="53.php" method="POST">
    <input type="text" name="n1">
    <input type="text" name="n2">
    <input type="submit" value="Загрузить">
</form>
    
</body>
</html>


