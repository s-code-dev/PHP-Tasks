<?php

// 112
// По заходу на страницу заполните селект числами от 
// первого до последнего дня текущего месяца. 


$date = date('Y-m-d');

$dateDayMount = new \DateTime($date);

$lenDay = $dateDayMount->format(" t ");



?>

<select name="" id="">
    <?php for($i = 1; $i < $lenDay; $i++): ?>

        <option value="<?= $i ?>"><?= $i ?></option>
    <?php endfor ?>
</select>
