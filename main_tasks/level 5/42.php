<?php
// 104
// Дана форма двумя инпутами. В инпуты через запятую 
// вводятся числа. После отправки формы выведите через запятую в 
// абзац числа, которые есть в обоих инпутах.


if(!empty($_POST)){
    $num1 = explode( ',', $_POST['num1'] );
    $num2 = explode( ',', $_POST['num2'] );
    $res = [];
    

    for($i = 0; $i < count($num1); $i++){

        for($j = 0; $j < count($num2); $j++){

            if($num1[$i] == $num2[$j]){

                $res[] = $num2[$j];

            }
        }
    }

    print_r( array_unique($res) );



}



?>



<form action="42.php" method="POST">
    <input type="text" name="num1">
    <input type="text" name="num2">
    <input type="submit" value="Загрузить">
</form>