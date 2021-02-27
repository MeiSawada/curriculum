<?php
//便利な配列

//count 要素の数を数える
$members = ["sawada", "saito", "matuura", "kubozono", "yasuda"];
echo count($members);
echo "<br>";

//sort 要素の並べ替え
sort($members);
var_dump($members);
echo "<br>";

//in_array 配列中にある要素が存在しているか
if (in_array("sawada",$members)){
    echo "澤田がいるよ！";
} else {
    echo "澤田はいないよ！";
}
echo "<br>";

//implode 配列を結合して文字列に変換
$atstr = implode("@", $members);
echo $atstr;
echo "<br>";


//explode 文字列を指定の区切りで配列にする
$str = "1@2@3@4@5";
$array = explode("@",$str);
var_dump($array);
