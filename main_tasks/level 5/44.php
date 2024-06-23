<?php
// 106
//  Модифицируйте предыдущую задачу так, чтобы ссылка, ведущая на 
//  текущую страницу выделялась заданным классом:
// <ul>
// 	<li><a href="index.php?page=1">text1</a></li>
// 	<li><a href="index.php?page=2" class="active">text2</a></li>
// 	<li><a href="index.php?page=3">text3</a></li>
// </ul>

//  Дан следующий массив:

	$arr = [
		'text1',
		'text2',
		'text3',
	];

?>


<?php for($i = 1; $i <= count($arr); $i++): ?>

    <li href="index.php?page=<?= $i ?>" <?= $i === 2 ? "class=\"action\"" : '' ?>><?= $arr[$i-1] ?></li>

<?php  endfor; ?>