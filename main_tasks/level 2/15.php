<?php
 // 78
if($_POST['num'] === 'on'){


    

        $rs = true;



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- С помощью чекбокса спросите у пользователя, есть ли ему уже 
18 лет. Если есть, то выведите следующий текст:

<div class="adult">
	<h2>for adult</h2>
	<p>
		text text text
	</p>
</div> -->

<form action="15.php" method="POST">
    <label for="av">
        <input type="checkbox" name="num" id="av">
    </label>
    <input type="submit" value="Отправить">
</form>
<?php  if($rs): ?>
<div class="adult">
	<h2>for adult</h2>
	<p>
		text text text
	</p>
</div> 

<?php endif; ?>
    
</body>
</html>