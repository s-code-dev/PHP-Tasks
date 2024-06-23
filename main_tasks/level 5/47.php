<?php

//  Дан следующий массив:
// 109
	$arr = [
		['name' => 'user1', 'age' => 30, 'salary' => 500],
		['name' => 'user2', 'age' => 31, 'salary' => 600],
		['name' => 'user3', 'age' => 32, 'salary' => 700],
	];

// Сформируйте с помощью этого массива следующий код:
?>


<table border="1">
    <?php foreach($arr as $r): ?>
    <tr>
        <th><?= $r['name'] ?></th>
		<th><?= $r['age'] ?></th>
		<th><?= $r['salary'] ?></th>
    </tr>
    <?php endforeach; ?>
</table>


<!-- <table>
	<tr>
		<th>имя</th>
		<th>возраст</th>
		<th>зарплата</th>
	</tr>
	<tr>
		<td>user1</td>
		<td>30</td>
		<td>500</td>
	</tr>
	<tr>
		<td>user2</td>
		<td>31</td>
		<td>600</td>
	</tr>
	<tr>
		<td>user3</td>
		<td>32</td>
		<td>700</td>
	</tr>
</table> -->