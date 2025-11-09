<?php
// $path = './folder/book.txt';

// if (file_exists($path)) {  
//     $file = file_get_contents($path);
//     echo $file;
//     if (strpos($file, 'PHP') !== false) {
//         echo "Слово найдено";
//     } else {
//         echo "Слово не найдено";
//     }
// } else {
//     echo 0;
// }


// $path = 'folder';
// if (is_dir($path)) {
//     echo 1;
// }
// $path_2 = 'test_f2';

// if (!is_dir($path_2)) {
//     mkdir($path_2);
// }

// $f1 = 'folder';
// $f2 = 'test_f2';


// $files = scandir($f1);
// print_r($files);

// rmdir($f2);
// rmdir($f1);



// $folder = 'folder';
// $folder_files = scandir($folder);

// foreach ($folder_files as $i) {
//     if ($i != '.' && $i != '..') {
//         $path = $folder . '/' . $i;
//         $type = is_dir($path) ? 'folder' : 'file';
//         echo $path . ' - ' . $type . "</br>";
//     }
// }
// // *txt
// $textfile = glob("folder/*.txt");
// print_r($textfile);
// // *txt & *png

// // $t_a_p = glob("{folder,folder/folder_v2}/*.{txt,png}", GLOB_BRACE);
// // print_r($t_a_p);

// // folders 

// $folders = glob('folder/*', GLOB_ONLYDIR);
// print_r($folders);


// $real_path = realpath('folder/text2.txt');
// echo $real_path;

// записи данных в csv

// $data = [
//     ["Имя", "Возраст", "Город"],
//     ["Иван", "30", "Москва"],
//     ["Иван", "30", "Москва"],
// ]; 

// $file = fopen('./csv/users.csv', "w");

// fwrite($file, "\xEF\xBB\xBF");

// foreach ($data as $row) {
//     fputcsv($file, $row, ";");
// }

// fclose($file);

// чтение

// $file = fopen('./csv/users.csv', "r");

// while (($row = fgetcsv($file)) !== false) {
//     print_r($row);
// }

// fclose($file);

// JSON

// $arr = [
//     "name" => "ivan",
//     "age" => 30,
//     "city" => "Moscow",
//     "skills" => ["java", "rust"]
// ];


// // из json
// $jsonf = json_encode($arr, JSON_UNESCAPED_UNICODE);
// echo $jsonf;


// // в json

// $jsonf2 = json_decode($jsonf, true);
// print_r($jsonf2);

// 1

$arr = [
    "name" => "ivan",
    "age" => 30,
    "city" => "Moscow",
    "skills" => ["java", "rust"]
];
$arr_j = json_encode($arr, JSON_UNESCAPED_UNICODE);
echo $arr_j;
$file = fopen('./json/data.json', 'w');
file_put_contents('./json/data.json', $arr_j);
fclose($file);