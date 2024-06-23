<?php
// 101
// Даны 3 инпута. В них вводятся числа. 
// Проверьте, что эти числа являются тройкой Пифагора: квадрат самого 
// большого числа должен быть равен сумме квадратов двух остальных. 


        if(!empty($_POST)){

            $ar = [];

            foreach($_POST['nam'] as $arr){

                if($arr == max($_POST['nam'])){

                    continue;

                }else{

                    $ar[] = $arr; 

                }

            }

            $str = max($_POST['nam']) ** 2 == $ar[0] ** 2 + $ar[1] ** 2 ? 'тройка пифагора' : 'не являются тройкой пифагора';
            echo $str;
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


<form action="39.php" method="POST">

    <input type="text" name="nam[]">
    <input type="text" name="nam[]">
    <input type="text" name="nam[]">

    <input type="submit" value="Загрузить">

</form>
    
</body>
</html>