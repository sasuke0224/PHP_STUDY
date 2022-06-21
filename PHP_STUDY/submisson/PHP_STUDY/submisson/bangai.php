<?php
//次の文字列 $foodStringをサンプル画像の様式で出力しなさい。
//ただし、以下３つの関数を定義し、使用すること

//１．カンマで区切られた文字列を配列に変換して返却する関数 strToArray
//２．配列の各要素の頭に「●」をつけて返却する関数 marksArray
//３．配列の要素を一行ずつ出力する関数 outputArray

$foodsString = "肉,野菜,魚,ジュース,お酒";
$foodsString = array("肉","野菜","魚","ジュース","お酒");
foreach ($foodsString as $food){
    echo "$food\n";
}
?>
>