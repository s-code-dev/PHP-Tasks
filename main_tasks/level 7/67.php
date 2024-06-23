<?php
//128

// По заходу на страницу выведите в абзац название 
// дня недели последнего дня текущего месяца. 


$date = new DateTime('last day of this month');

$elem = $date->format('l');



?>

<p><?= $elem ?></p>







