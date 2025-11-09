<?php
$file = fopen('./files/hello.txt', 'a');

// 1
// fwrite($file, 'Hello, world!');


// 2
// $data = file('./files/notes.txt');
// for ($i = 0; $i < sizeof($data); $i++) {
//     echo $data[$i] . "</br>";
// }

// 4
// $students = fopen('./files/students.txt', "a");

// $data = file('./files/students.txt');

// for ($i = 0; $i < sizeof($data); $i++) {
//     echo $i + 1 . " - " . $data[$i] . "</br>";
// }

// fclose($students);

// 5
// copy('./files/source.jpg', './files/backup.jpg');

// 6
// $old_txt = fopen('./files/old.txt', "r");

// if ($old_txt) unlink('./files/old.txt');

// fclose($old_txt);

// 7
// $data_f = file('./files/data.txt');
// $count = sizeof($data_f);
// // for ($i = 0; $i < sizeof($data_f); $i++) {
// //     $count += 1;
// // }

// echo $count;

// 9
// rename('./files/old_name.txt', "./files/new_name.txt");

// 8
// $data_f2 = file("./files/data.txt");
// print_r($data_f2);
// // $arr_data = explode(' ', $data_f2);
// for ($i = 0; $i < sizeof($data_f2); $i++) {
//     // echo $arr_data[$i];
//     if ($data_f2[$i] === "PHP") {
//         echo 'PHP - есть';
//     } else {
//         echo 'PHP - нету';
//     }
// }




// 3
// $log = fopen('./files/log.txt', "a");
// fwrite($log, "Новая запись\n");

// fclose($log);

fclose($file);
