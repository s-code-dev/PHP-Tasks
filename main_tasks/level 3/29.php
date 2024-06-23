<?php

//Дан массив со словами. Дана форма с инпутом. В инпут вводится 
// слово. Получите из массива все слова, которые содержат в себе все буквы 
// введенного слова. Результат выведите в виде списка ul. 
 // 89
$arr = [
    'hello',
    'hi',
    'olleh',
  
];

if(!empty($_POST)){
    $new = [];
    $strar = str_split($_POST['num'], 1);
    foreach($arr as $r){
        if(!array_diff(str_split($r), $strar)){
            $new[] = $r; 

        }
    }

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


<form action="29.php" method="POST">
    <input type="text" name="num">
    <input type="submit" value="Загрузить">
</form>

<ul>
<?php foreach($new as $n): ?>

    <li><?= $n ?> </li>

<?php endforeach; ?>
</ul>   
</body>
</html>