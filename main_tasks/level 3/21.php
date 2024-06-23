<?php
 // 84
if(!empty($_POST['num'])){

    // var_dump(substr($_POST['num'], 5, 7));
    // var_dump(date('y'));
    // var_dump(strtotime($_POST['num']));

    $dt = date_create($_POST['num']);
    $md = date_format($dt, 'm');
    $dd = date_format($dt, 'd');
    $rd = date('y-m-d');

    if($md < date('m')){ 

        $reald = date('y')+1;

        $strr = strtotime($reald."-$md-$dd");

        $result = $strr - strtotime($rd);



        var_dump('До дня рождения осталось ' . $result/60/60/24 . ' д');

    }else{
        
        $hbd = date_format($dt, date('y').'-m-d');
        $result = strtotime($hbd) - strtotime($rd);

        var_dump('До дня рождения осталось ' . $result/60/60/24 . ' д');

    }
}

?>
<!-- Спросите у пользователя день его рождения в 
формате 2025-12-31. После отправки формы выведите, 
сколько дней осталось до его ближайшего Дня Рождения.  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="21.php" method="POST">
    <input type="" name="num" value="2023-10-15">
    <input type="submit" value="Загрузить">
</form>
    
</body>
</html>