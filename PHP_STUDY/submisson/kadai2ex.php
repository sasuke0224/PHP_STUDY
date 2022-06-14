<?php

//問題２ex
//ループを使い0から99までを表示するプログラムを書きなさい
//ただし、一列に表示する数字の数は１０個とし、それ以降は改行すること
$i = 0;
$j = 0;
$space =" ";
for ($i = 0; $i < 10; $i++) {
     for ($j = 0; $j < 10; $j++) {
         if ($j % 10 == 9) {
            echo $space . $i . "$j\n";
        }   elseif ($i == 0) {
             echo ltrim($space . $j, "0");
        }   elseif ($j % 10 <= 9) {
            echo $space .$i . $j;
        }
    }
}
?>