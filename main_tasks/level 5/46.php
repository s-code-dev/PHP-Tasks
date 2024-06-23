<?php
header('Content-Type: text/html; charset=utf-8');
// 108
// Дана строка с текстом. Получите процентное 
// содержание каждого символа текста в виде ассоциативного 
// массива, в котором ключами будут 
// символы, а значениями - их процентное содержание.

$input = 'Hello word.  dsad asvasdv asv asv sfb dfnethnert  rewr ewrbn';

$arr = array_count_values(
            str_split( $input, 1 ));

$max = max($arr);
$keys = array_keys($arr);
$value = array_values($arr);
$val = [];
for($i = 0; $i < count($value); $i++){
    $val[$keys[$i]] = (string) round(($value[$i] * 100 / $max), 0).'%';
    
}
echo '<pre>';
    var_dump($val);
echo '</pre>';



?>