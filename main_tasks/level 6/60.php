<?php
//122

// Дана папка с файлами. Удалите из этой папки все 
// файлы с заданным расширением. 

$fl = scandir(__DIR__ . '/new');
$arr = [];


foreach($fl as $f){

    preg_match('/\w+\.php/', $f, $matches );

    if($f === '.' || $f === '..'){

        continue;

    }

    // var_dump($matches);
    
    else if($matches[0]){

        $arr[] = $f;



    }

}


var_dump($arr);

?>