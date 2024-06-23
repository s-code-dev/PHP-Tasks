<?php
 // 87
// Дана форма с инпутом. В инпут вводится число из 
// шести цифр. После отправки формы проверьте, что 
// число представляет собой счастливый билет, то есть 
// сумма первых трех цифр равна сумме вторых трех цифр. 

if(!empty($_POST)){

    if(strlen((string) $_POST['num']) === 6){

        $leftnum = substr((string) $_POST['num'], 1, 3);
        $rightnum = substr((string) $_POST['num'], 3, 6);
        
        echo array_sum(str_split($leftnum)) === array_sum(str_split($rightnum)) ? 'счастливый билет' : 'обычный билет';

    }else{

        echo 'Число должно состоять из 6 символов';

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


<form action="24.php" method="POST">
    <input type="text" name="num">
    <input type="submit" value="Загрузить">
</form>
    
</body>
</html>