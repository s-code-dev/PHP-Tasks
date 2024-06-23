<?php

// 113
// Дана форма с инпутом. В инпут вводится число. 
// По отправки формы выведите в абзац строку, состоящую 
// из нулей, количество которых равно числу. Например, 
// при вводе числа 5 у нас должна получится строка '00000'. 



if(!empty($_POST)){

    $value = "";

    for($i < 0; $i < $_POST["num"]; $i++){

        $value = $value . "0";


    }

    var_dump($value);

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


<form action="51.php" method="POST">
    <input type="text" name="num">
    <input type="submit" value="Загрузить">
</form>
    
</body>
</html>


<!-- Поддержи лайком! -->