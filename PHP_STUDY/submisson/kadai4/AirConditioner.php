<?php
class AirConditioner {
    /*
    モード (冷房,暖房,除湿　のみ、それ以外の文字列が入らないこと)
    一般的なリモコンを想定し、それぞれのモードを切り替える関数を定義すること
    */
    private $mode;
    /* 
    温度 (18～30)
    一般的なリモコンを想定し、1度づつ上下させる関数を定義すること
    */
    private $temperature;
    /* 
    風量 (1～5) 
    一般的なリモコンを想定し、1づつ上昇させ、上限に達すると最小値に戻る関数を定義すること (1->2->3->4->5->1)の順で変化する
    */
    private $power;
    /*
    コンストラクタ
    */
    /*function cooler($mode) {
        return "冷房"; 
    }
    
    function heating() {
        
    }
    
    function dry(){
        
    }*/
    
    function __constract($mode, $temperature, $power){
        // 初期設定は冷房モードとすること
        // 温度・風量は引数で受け取ること
        $this->mode = $mode;
        $this->temperature = $temperature;
        $this->power = $power;
    }
    
    function getmode() {
        return $this->mode;
    }
    
    function gettemperature() {
        return $this->temperature;
    }
    
    function getpower() {
        return $this->power;
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