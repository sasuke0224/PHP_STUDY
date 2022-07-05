<?php

//問題２
//ループを使い1から100までを表示するプログラムを書きなさい
//ただし、一列に表示する数字の数は１０個とし、それ以降は改行すること
$num = 1;
$space = " ";
for ($num = 1; $num < 101; $num++) {
    if ($num % 10 == 0) {
    echo $space . "$num\n";
}   elseif ($num % 10 <=9) {
    echo $space . $num;
}
} 
?>