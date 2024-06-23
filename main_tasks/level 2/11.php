<?php

 // 73

if(!empty($_POST['num'][0])){

    var_dump(range($_POST['num'][0], $_POST['num'][1]));



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


<form action="11.php" method="POST">
    <input type="text" name="num[]">
    <input type="text" name="num[]">
    <input type="submit" value="Загрузить">
</form>
    
</body>
</html>