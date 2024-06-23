<?php
//129

// В папке лежат текстовые файлы. Получите первые N 
// строк текста из каждого файла и запишите 
// результат в новый файл, разделив полученные тексты пустыми строками. 


$folder = 'new'; // папка где лежат текстовые файлы
$max_lines = 5; // сколько строк читать из каждого файла



if (is_dir($folder)) {

  $handle = opendir($folder);

  while (false !== $file_name = readdir($handle)) {
      $file_path = $folder . '/' . $file_name;
      if (is_file($file_path) && preg_match('/\.txt$/', $file_name)) {
        $file = fopen($file_path, 'r');
        while (!feof($file)) {
          $line = fgets($file);
          if ($max_lines > 0) {
            echo $line;
            $max_lines--;
          } else {
            break;
          }
        }
        fclose($file);
      }
    var_dump($file_path);

    }


}



