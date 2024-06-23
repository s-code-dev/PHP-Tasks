<?php


// Дана форма с текстареа и инпутом. В текстареа 
// вводится текст со словами. В инпут вводится слово. 
// По отправки формы выведите на экран, сколько раз 
// встречается это слово в веденном тексте форма форма. 

//92


if(!empty($_POST)){

    // $new = strtr($_POST['text'], $converter);
    $text = $_POST['text'];
    $word = $_POST['word'];

    preg_match_all( "/$word/", $text, $matches  );

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

<h1>Узнать сколько раз встречается слово в тексте</h1>
<form action="32.php" method="POST">
    <textarea name="text" cols="30" rows="10"></textarea>
    <input type="text" name="word" >
    <input type="submit" value="Загрузить">
</form>
<?php if(!empty($text) && !empty($word)): ?>
Слово <?=  $word ?> встречается в тексте: <?= count($matches[0]) ?> раз

<?php endif; ?>


    
</body>
</html>