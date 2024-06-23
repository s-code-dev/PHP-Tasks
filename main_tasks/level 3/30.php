<?php

// По заходу на страницу сгенерируйте N абзацев так, чтобы они содержали 
// случайный текст и были покрашены в случайный цвет.
 // 90
$str = range('a', 'z');
$color = [
    'red',
    'blue',
    'green',
];




// var_dump( substr( implode('',$str), 0, 7) );

$arr2 = [];
$arr1 = [];
for($i = 0; $i < rand(3, 5); $i++){
    for($j = 0; $j < 4; $j++){
        shuffle($str);
        $arr2[] = $j == 3 ? substr( implode('',$str), 0, 7).'.' : substr( implode('',$str), 0, 7);

    }
$arr1[] = $arr2;
$arr2 = null;
}


?>
<p>
<?php foreach($arr1 as $ar => $s): ?>
    <?php $rundColor = $color[rand(0, 2)]; ?>
    <p style="color: <?= $rundColor ?>">
        <?php foreach($s as $a): ?>

            <?= $a; ?>

        <?php endforeach; ?>
    </p>
<?php endforeach; ?>
</p>