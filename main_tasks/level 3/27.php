<?php
 // 87
// Дана форма с инпутом. В инпут вводится 
// дата в формате 2025-12-31. После отправки формы сделайте так, чтобы в 
// инпуте стала дата в формате 31.12.2025. 

if(!empty($_POST)){


    $txt = date_create($_POST['num']);

    echo date_format($txt, 'd.m.y');


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


<form action="27.php" method="POST">
    <input type="text" name="num" value="2025-12-31">
    <input type="submit" value="Загрузить">
</form>
    
</body>
</html>