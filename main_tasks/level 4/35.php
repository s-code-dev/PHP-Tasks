<?php 
//97
// Дана форма с инпутом. В инпут вводится дата. После 
// отправки формы определите, была уже 
// дата в текущем году. Результат выведите в абзац.

if(!empty($_POST)){


    $date = date('y-m-d');
    $strDateMain = strtotime($date);
    $strDate = strtotime($_POST['dt']);

    $rs = $strDateMain > $strDate ? 'Дата была в текущем году' : 'Даты не было в текущем году';


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


<form action="35.php" method="POST">
    <input type="date" name="dt">
    <input type="submit" value="Загрузить">
</form>
<p><?= $rs ?></p>
    
</body>
</html>