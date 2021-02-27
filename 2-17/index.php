<?php

//すごろく

//出目の合計
$total = 0;
//回数
$i=0;

while ($total<40) {
    $total += $dice=mt_rand(1,6);
    $i += 1; 
    echo $i."回目=".$dice;
    echo '<br>';
} if ($total>=40){
    echo "合計".$i."回目でゴールしました";
    echo '<br>';
echo '<br>';
}

//時間と挨拶

date_default_timezone_set('Asia/Tokyo');
$time = intval(date('H'));
echo date("今".$time."時台です");
echo '<br>';


if (4 <= $time && $time <= 12) { 
echo "おはようございます";
} elseif (12 <= $time && $time <= 20) {
echo "こんにちは";
 } else {
echo "こんばんは";
 }