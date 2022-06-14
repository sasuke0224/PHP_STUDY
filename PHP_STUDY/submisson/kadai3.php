<?php
//問題３
//以下の関数を定義しなさい
//１．引数として受け取った数値を2倍にして返却するdouble関数 
$c = double(1);
echo $c;

function double($x) {
    return $x * 2;
}
//2. 引数として受け取った値が数値であればtrueをそれ以外ならfalseを返却するisNumber関数
$c = isNumber('a');

function isNumber($x) {
    if (is_numeric($x)) {
        echo 'true';
    } else {
        echo 'false';
    }
}
//3. 数値の入った配列を引数として受け取り、配列内の要素をすべて二倍にして配列として返却するdoubleArr関数。ただし引数が配列でなかった場合はfalseを返却すること

$result = dubleArr(array(1,2,3));

// 引数に配列以外を渡した場合
if (!$result) {
    echo "引数が不正です!";
    return;
}

foreach ($result as $num) {
    echo $num;
    echo "\n";
}

function dubleArr($array){
    foreach ()
}


//4. 引数として受け取った数値をすべて合算した値を返却するsum関数。ただし引数は可変長とし、いくつでも数字を合算できるようにすること。また、引数の不正などにより実行できない場合は"エラー：引数が不正です" というメッセージが表示されるエラーを返却すること
?>