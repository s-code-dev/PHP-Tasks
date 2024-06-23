<?php

// 2

$cars = [
    ['name' => 'Такси 1', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 2', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 3', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 4', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 5', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
];


// "Такси 1, стоит на 15 км, до пассажира 3 км (занят)"
// "Такси 2, стоит на 0 км, до пассажира 12 км (свободен) - едет это такси"
// "Такси 3, стоит на 300 км, до пассажира 288 км (свободен)"

$passenger = rand(0, 1000);



foreach($cars as $car => $c){


    if(($c['position'] > 0 && $c['position'] < 50) && ($passenger > 0 && $passenger < 50)){

        echo '"'.$c['name'].'," стоит на '.$c['position'].' км,  до пассажира '.$passenger .' '.($c['isFree'] ? '(свободен) - едет это такси' : '(занят)');
        echo '<br>';

        
    }elseif(($c['position'] > 50 && $c['position'] < 150) && ($passenger > 50 && $passenger < 150)){

        echo '"'.$c['name'].'," стоит на '.$c['position'].' км,  до пассажира '.$passenger .' '.($c['isFree'] ? '(свободен) - едет это такси' : '(занят)');
        echo '<br>';
    }elseif(($c['position'] > 150 && $c['position'] < 300) && ($passenger > 150 && $passenger < 300)){

        echo '"'.$c['name'].'," стоит на '.$c['position'].' км,  до пассажира '.($c['position'] - $passenger) .' '.($c['isFree'] ? '(свободен) - едет это такси' : '(занят)');
        echo '<br>';
    }elseif(($c['position'] > 300 && $c['position'] < 600) && ($passenger > 300 && $passenger < 600)){

        echo '"'.$c['name'].'," стоит на '.$c['position'].' км,  до пассажира '.($c['position'] - $passenger).' '.($c['isFree'] ? '(свободен) - едет это такси' : '(занят)');
        echo '<br>';
    }elseif(($c['position'] > 600 && $c['position'] < 800) && ($passenger > 600 && $passenger < 800)){

        echo '"'.$c['name'].'," стоит на '.$c['position'].' км,  до пассажира '.($c['position'] - $passenger) .' '.($c['isFree'] ? '(свободен) - едет это такси' : '(занят)');
        echo '<br>';
    }elseif(($c['position'] > 800 && $c['position'] < 1000) && ($passenger > 800 && $passenger < 1000)){

        echo '"'.$c['name'].'," стоит на '.$c['position'].' км,  до пассажира '.($c['position'] - $passenger) .' '.($c['isFree'] ? '(свободен) - едет это такси' : '(занят)');
    }



}