<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 75

По заходу на страницу выведите список ul, заполненный числами от 1 до 10. -->
<?php $i = 0; ?>
<ul>
<?php while($i < 10): ?>
<?php $i++; ?>
    <li><?= $i ?></li>

<?php endwhile ?>
</ul> 
</body>
</html>