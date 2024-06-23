<?php 

//100
// Дана форма с текстареа. В текстареа вводится текст. Получите первое слово 
// каждого предложения в тексте и выведите на экран. 

if(!empty($_POST)){
    $arrWords = explode('. ', $_POST['txt']);
    // var_dump( $arrWords );
    $arrW = [];
    $ts = [];
    $dt = [];

    foreach($arrWords as $arr){

        $dt[] = explode(' ', $arr);

        foreach( $dt as $word ){
   
            $ts =  implode(' ', array_filter( preg_grep('/^[А-Я]/u', $word) ));
            
      

        }

            $arrW[] = $ts;

       
       

    }

        // echo '<pre>';
        // var_dump( $ts);
        // echo '</pre>';

    var_dump(implode(', ',array_filter($arrW)));
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

<form action="38.php" method="POST">

<textarea name="txt"  cols="30" rows="10"><?= $_POST['txt'] ?? $_POST['txt'] ?></textarea>
<input type="submit" value="Загрузить">
</form>
    
</body>
</html>