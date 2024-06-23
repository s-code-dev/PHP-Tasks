<?php
//126

// Дана папка с файлами. Получите имена всех картинок из этой папки. 




$ttz = scandir(__DIR__ . '/new');

$arr = [];
foreach($ttz as $f){

    preg_match('/(^[A-Za-zА-Яа-я]+\.(jpg|png)$)/', $f, $matches);

    if($matches){
        $arr[] = $f;
    }

    



}

var_dump( $arr );

?>