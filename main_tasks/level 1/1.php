<?php

// 1

// гаражи
$garages = [
    1 => ['id' => 1, 'name' => 'Гараж на улице 1', 'size' => 1],
    7 => ['id' => 7, 'name' => 'Подземная парковка', 'size' => 100],
    23 => ['id' => 23, 'name' => 'У домика в деревне', 'size' => 2],
];

// машины
$cars = [
    ['name' => 'Белый Ford', 'garageId' => 7],
    ['name' => 'Черный Уаз', 'garageId' => 1],
    ['name' => 'Синий Таз',  'garageId' => 7],
];

/* ===== Ваш код ниже ===== */

// Выведите отдельную строку для каждой машины, вида: Машина "НАЗВАНИЕ МАШИНЫ" стоит в "НАЗВАНИЕ ГАРАЖА"

// например: Машина "Синий Таз" стоит в "Подземная парковка"


for($i = 0; $i < count($cars); $i++){


     if($cars[$i]['garageId'] === $garages[1]['id']){

        echo 'Машина "'.$cars[$i]['name'].'" стоит в "'.$garages[1]['name'].'"';
        echo '<br>';

     }elseif($cars[$i]['garageId'] === $garages[7]['id']){

        echo 'Машина "'.$cars[$i]['name'].'" стоит в "'.$garages[7]['name'].'"';
        echo '<br>';

     }elseif($cars[$i]['garageId'] === $garages[23]['id']){

        echo 'Машина "'.$cars[$i]['name'].'" стоит в "'.$garages[23]['name'].'"';

     }


}