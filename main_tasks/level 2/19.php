<?php
 // 82
// Дана форма с инпутом. В инпут вводится номер телефона. 
// После отправки формы проверьте формат введенного номера. 
// Если он корректный, то покрасьте границу инпута в 
// зеленый цвет, а если некорректный - то в красный. 

if(!empty($_POST)){


    preg_match('/^(\+7|8)\d{10}$/', $_POST['num'], $trf);



    if($trf){

        $rst = 'green';

    }else{

        $rst = 'red';

    }


    // if(){

    // }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .red{

            border: 3px solid red;

        }
        .green{

           border: 3px solid green;


        }
    </style>
</head>
<body>

<form action="19.php" method="POST">
    <input type="text" name="num" value="<?= $_POST['num'] ?? $_POST['num'] ?>" class="<?= $rst ?? $rst ?>">
    <input type="submit" value="Проверить">
</form>
    
</body>
</html>