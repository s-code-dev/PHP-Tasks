<?php
// 102
//  Дан следующий массив:

	$arr = [
		['name' => 'user1', 'age' => 30, 
			'salary' => 
			500], 
		['name' => 'user2', 'age' => 31, 
			'salary' => 
			600], 
		['name' => 'user3', 'age' => 32, 
			'salary' => 
			700], 
	];
?>

<!-- Сформируйте с помощью этого массива следующий код: -->
<!-- <table>
	<tbody>
		<tr>
			<td>1</td>
			<td>user1</td>
			<td>30</td>
			<td>500</td>
		</tr>
		<tr>
			<td>2</td>
			<td>user2</td>
			<td>31</td>
			<td>600</td>
		</tr>
		<tr>
			<td>3</td>
			<td>user3</td>
			<td>32</td>
			<td>700</td>
		</tr>
	</tbody>
</table> -->


<table>
    <tbody>
         <?php for($i = 0; $i < count($arr); $i++): ?>
            <?php $f = 1; ?>
            <tr>
                <td><?=  $f += $i ?></td>
                <td><?= $arr[$i]['name']  ?></td>
                <td><?= $arr[$i]['age']  ?></td>
                <td><?= $arr[$i]['salary']  ?></td>
            </tr>
        <?php endfor ?>
    </tbody>
</table>

        