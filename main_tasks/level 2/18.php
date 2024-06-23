<?php

 // 81

// Дана форма с инпутом. В инпут вводится число. 
// После отправки формы получите массив делителей числа и 
// выведите их в абзац через запятую.



if(!empty($_POST['num'])){

        start();

}

$arr = [];


function start( $num = null )
{


    if( $num == null ){

        $arr[] = $_POST['num'];

    }if( $_POST['num'] / $_POST['num'] ){

        $arr[] = $_POST['num'];

    }if( $num / 2 ){

        $arr[] = $num;
        start();

    }
    
    // if($_POST['num'] / 2){

    //     $arr[] = $_POST['num']

    // }

    



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

<form action="18.php" method="POST">
    <input type="number" name="num">
    <input type="submit" value="Загрузить">
</form>
    
</body>
</html>