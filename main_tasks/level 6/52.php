<?php

// 114

	$arr = [
		['name' => 'prod1', 'price' => 100, 'amount' => 1],
		['name' => 'prod2', 'price' => 200, 'amount' => 2],
		['name' => 'prod3', 'price' => 300, 'amount' => 3],
	];
?>

<!-- Сформируйте с помощью этого массива следующий код: -->
<table>
	<thead>
		<tr>
			<th>продукт</th>
			<td>цена</td>
			<td>количество</td>
			<td>сумма</td>
		</tr>
	</thead>
    <tbody>

        <?php for($i = 0; $i < count($arr); $i++): ?>
            <?php $price += $arr[$i]['price'];
            ?>
        <tr>
			<td><?= $arr[$i]['name']  ?></td>
			<td><?= $arr[$i]['price']  ?></td>
			<td><?= $arr[$i]['amount']  ?></td>
		</tr>
        <?php endfor ?>
    </tbody>
</table>
<br>
итого: <span><?= $price ?></span> 
