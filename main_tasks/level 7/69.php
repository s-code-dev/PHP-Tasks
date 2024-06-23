<?php
//130

// Дана папка с файлами. Напишите программу, которая сделает 
// пустыми все  файлы из этой папки. 



$folder = 'empty'; // папка где лежат  файлы

$handle = opendir($folder);



while (false !== $fileName = readdir($handle)) {

  if($fileName === '.' || $fileName === '..'){

    continue;

  }
    $filePath = $folder . '/' . $file_name;

    file_put_contents($filePath, '');

}


 



?>
