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

$result = doubleArr(array(1,2,3));

if (!$result) {
    echo "引数が不正です!";
    return;
}

foreach ($result as $num) {
    echo $num;
    echo "\n";
}




function doubleArr($array) {
    if (is_array($array)) {
        $answer = array();
        foreach ($array as $i) {
            $answer[] = $i * 2;
        }   
        return $answer;
    }   else {
        return false;
    }  
}


//4ex. 引数として受け取った数値すべてを合計して返却する関数sum。ただし引数はいくつでも送れるようにすること
//++++++++++++ここから+++++++++++++++++++++
$result = sum(1,2,3,4,5);
echo $result; // 15
//++++++++++++ここまでは変更しない+++++++++++++++++++++

/*
引数として受け取った数値をすべて合算して返却する
*/
function sum() {
    // ↑必要な引数は自身で定義すること↑
    //　ここから下に処理を記述する
}
//5ex. 4exの関数に引数の不正などでエラーが発生した場合"予期せぬエラーが発生しました"とメッセージを表示し、コンソールにはその他のエラーメッセージを表示させないようにすること（≒例外処理を行うこと）
?>