<?php
class AirConditioner {
    private $mode;
    private $temperature;    
    private $power;    
    /*
    モード (冷房,暖房,除湿　のみ、それ以外の文字列が入らないこと)
    一般的なリモコンを想定し、それぞれのモードを切り替える関数を定義すること
    */
    function cooling(){
        $this->mode = "冷房";
    }
    function heating(){
        $this->mode = "暖房";
    }
    function Dehumidification(){
        $this->mode = "除湿";
    }

    
    /* 
    温度 (18～30)
    一般的なリモコンを想定し、1度づつ上下させる関数を定義すること
    */
    
    function hot(){
        if ($this->temperature < 30) {
            $this->temperature++;
        }   else {
            $this->temperature = 30;
        }
}
    function cool(){
        if ($this->temperature > 18) {
            $this->temperature--;
        }   else {
            $this->temperature = 18;
        }   
}
    /* 
    風量 (1～5) 
    一般的なリモコンを想定し、1づつ上昇させ、上限に達すると最小値に戻る関数を定義すること (1->2->3->4->5->1)の順で変化する
    */
    function airvolume(){
        if ($this->power == 5){
            $this->power = 1;
        }
        elseif ($this->power >= 1){
            $this->power++;
        }  
    }

    /*
    コンストラクタ
    */
    function __construct($temperature, $power){
        // 初期設定は冷房モードとすること
        // 温度・風量は引数で受け取ること
        $this->mode = "冷房";
        if (18 > $temperature) {
            $temperature = 18;
        }
        if ($temperature > 30) {
            $temperature = 30;
        }
        $this->temperature = $temperature;
        if (1 > $power) {
            $power = 1;    
        }
        if ($power > 5) {
            $power = 5;    
        }
        $this->power = $power;
    }
    
   
    /* 現在設定を表示 */
    function showStatus() {
        echo "======現在の設定======\n";
        echo "モード: $this->mode\n";
        echo "温度設定:$this->temperature\n";
        echo "風量:$this->power\n";
    }
}

?>