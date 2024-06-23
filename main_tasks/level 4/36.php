<?php

//98
//  Дан следующий массив:

	$arr = [
		['href'=>'page1.html', 'text'=>'text1'],
		['href'=>'page2.html', 'text'=>'text2'],
		['href'=>'page3.html', 'text'=>'text3'],
	];


// Сформируйте с его помощью следующий HTML код:
// <ul>
// 	<li><a href="page1.html">text1</a></li>
// 	<li><a href="page2.html">text2</a></li>
// 	<li><a href="page3.html">text3</a></li>
// </ul>


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ul>
<?php for($i = 0; $i < count($arr);  $i++): ?>

    <?php for($j = 0; $j < count($arr[$i]); $j++): ?>

        <li><a href="<?=  $arr[$i]['href'] ?>"><?=  $arr[$i]['text'] ?></a></li>

    <?php endfor ?>

<?php endfor ?>
</ul>
    
</body>
</html>