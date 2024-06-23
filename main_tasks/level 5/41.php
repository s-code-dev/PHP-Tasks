<?php 
// 103
// Дана форма с инпутом. В инпут вводится дата 
// рождения юзера в формате год-месяц-день. После отправки 
// формы выведите в абзац, сколько полных лет юзеру. 


if(!empty($_POST)){
    $nowD = date('y-m-d');
    $userD = strtotime($_POST['date']);
    $rez = strtotime($nowD) - $userD;

    echo round($rez/60/60/24/365, 0) ;

    
}



?>


<form action="41.php" method="POST">
    <input type="text" name="date">
    <input type="submit" value="Загрузить">
</form>