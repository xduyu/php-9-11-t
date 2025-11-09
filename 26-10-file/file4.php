<?php
$file1 = fopen('./data/input.txt', 'a');
$file2 = fopen('./data/output.txt', 'a');

if (!file_exists('./data/input.txt')) echo "нет файла - input.txt";
if (!file_exists('./data/output.txt')) echo "нет файла - output.txt";

$file1_lines = file('./data/input.txt');
// print_r($file1_lines);
if (!count($file1_lines) >= 2) echo "меньше двух строк";
$file1_second_line = $file1_lines[1];

$arrf1sl = explode(' ', $file1_second_line);

// $longest_word = '';
// $maxLength = 0;
// $res_text = '';
// foreach ($arrf1sl as $word) {
//     $wordC =  trim($word, " .,!?;:()[]{}«»\"'\t\n\r");
//     $len = mb_strlen($wordC);
//     if ($maxLength < $len) {
//         $maxLength = $len;
//     }
// }

// $minLen = floor($maxLength / 2);

// // echo $minLen;

// $cleanArray = [];
// foreach ($arrf1sl as $word) {
//     $tword = trim($word, " .,!?;:()[]{}«»\"'\t\n\r");
//     // echo $tword;
//     $lengt = mb_strlen($tword);
//     if ($lengt > $maxLength) {
//         $maxLength = $lengt;
//         $longest_word = $tword;
//     }
//     foreach ($file1_lines as $line) {
//         $line_word = explode(' ', $line);
//         $filtersword = [];
//         // $minLen = floor($maxLength / 2);
//         foreach ($line_word as $word) {
//             $tword = trim($word, " .,!?;:()[]{}«»\"'\t\n\r");
//             if (mb_strlen($tword) > $minLen) {
//                 $filtersword[] = $tword;
//             }
//         }
//         // print_r($filtersword);
//         $res_text .= implode(', ', $filtersword) . "\n";
//     }
// }
// file_put_contents('./data/output.txt', $res_text);


$longest_word2 = '';
$ml2 = 0;
$minl = 4;
$res_t = '';
$last_arr = [];
for ($i = 0; $i < sizeof($arrf1sl); $i++) {
    if ($arrf1sl[$i] > $arrf1sl[$i++]) {
        $trimed_word = $arrf1sl[$i];
        $longest_word2 = $trimed_word;
        $ml2 = mb_strlen($longest_word2);
    } else {
        $trimed_word = $arrf1sl[$i++];
        $longest_word2 = $trimed_word;
        $ml2 = mb_strlen($longest_word2);
    }
    for ($j = 0; $j < sizeof($file1_lines); $j++) {
        $lw = explode(' ', $file1_lines[$j]);
        for ($h = 0; $h < count($lw); $h++) {
            $tword = trim($lw[$h], " .,!?;:()[]{}«»\"'\t\n\r");
            if (mb_strlen($tword) > $minl) {
                $last_arr[] = $tword;
            }
        }
    }
}
$res_t .= implode(', ', $last_arr) . "\n";
echo $res_t;
file_put_contents('./data/output.txt', $res_t);
