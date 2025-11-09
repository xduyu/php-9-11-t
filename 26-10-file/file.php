<?php

// $file = fopen("./files/text2.txt", "a");

// if ($file) {
//     echo 'есть';
//     fwrite($file, "1234\n"); // так-же, есть file_put_contents
//     // file_put_contents("./files/text.txt", '123', FILE_APPEND);
// } else {
//     echo "нету";
// }

// fclose($file);

$file = fopen('./files/data.txt', 'r');
// fwrite($file, "Новые данные\n");
// $file_data = file_get_contents('./files/text2.txt');
// $file_data = file('./files/data.txt');

if (!$file) {
    die('Не удалось прочитать файл');
}

$size = filesize('./files/data.txt');

$data = fread($file, $size);

// echo file_exists('./files/data.txt');
// echo is_dir('./files');
// echo is_file('./file.php');

// echo $data;

// $arr_lines = explode("\n", $data);
// // print_r($arr_lines);
// for ($i = 0; $i < sizeof($arr_lines); $i++) {
//     trim($arr_lines[$i]);
//     if (!empty($arr_lines[$i])) {
//         echo $arr_lines[$i] . "</br>";
//     }
// }

// $size = 1024 / 1024;

// if ((file_exists('./files/data.txt') || is_dir('./files') || is_file('./file.php'))) {
//     echo (filesize("./files/data.txt") / 1024) / 1024;
// }



copy('./files/data.txt', "./files/new.txt");
// rename('./files/new.txt', './files/new_name.txt');

// $file_data = fread($file, filesize($file));
// echo filesize($file);
// var_dump($file_data);
// for ($i = 0; $i < sizeof($file_data); $i++) {
//     echo $file_data[$i] . "</br>";
// }
unlink('./files/new.txt');
fclose($file);

// режим r+

// $file = fopen('./files/text2.txt', 'r+');
// fwrite($file, "1234\n");
// $file_data = file_get_contents('./files/text2.txt');
// echo $file_data;
// fclose($file);
