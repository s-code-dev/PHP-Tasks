<?php
// 105
//  Дан следующий массив:

	$arr = [
		'text1',
		'text2',
		'text3',
	];


// Сформируйте с его помощью следующий HTML код:
// <ul>
// 	<li><a href="index.php?page=1">text1</a></li>
// 	<li><a href="index.php?page=2">text2</a></li>
// 	<li><a href="index.php?page=3">text3</a></li>
// </ul>

?>

<ul>

<?php for($i = 1; $i <= count($arr); $i++): ?>

    <li href="index.php?page=<?= $i ?>"><?= $arr[$i-1] ?></li>

<?php  endfor; ?>

</ul>