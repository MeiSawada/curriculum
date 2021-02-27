<?php
//数字に関する関数

//ceil 切り上げ
$x = 6.1;
echo ceil($x);
echo '<br>';

//floor 切り捨て
$x = 5.8;
echo floor($x);
echo '<br>';

//round 四捨五入
$X = 5.8;
echo round($x);
echo '<br>';

//pi 円周率
$x = pi();
echo round($x);
echo '<br>';

//mt_round 乱数
echo mt_rand(1,50);
echo '<br>';


//文字列に関する関数

//strlen 文字列の長さ
$str = "pudding";
echo strlen($str);
echo '<br>';

//strpos 検索
$str = "sawadamei";
echo strpos($str, "a");
echo '<br>';

//substr 文字列の切り取り
$str = "sawadamei";
echo substr($str, -2, 1);
echo '<br>';

//str_replace 置換
$str = "sawadamei";
echo str_replace("sawada", "okazaki", $str);
echo '<br>';

//日本語の場合
$str = "さわだめい";
echo mb_strlen($str);
echo '<br>';


//表示に関する関数

$name = "澤田さん";
$limit_number = 3;
printf("%sの残り時間はあと%02d分です",$name, $limit_number);
echo '<br>';

$limit_time = sprintf("%sの残り時間はあと%02d分です",$name, $limit_number);
echo $limit_time;
