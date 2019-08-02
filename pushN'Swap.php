<?php 
include('MySwap.php');
class pushNSwap {
    public $la = [];
    public $lb = [];
    public static $iteration = [];
    public function __CONSTRUCT(){
        for($i = 0; $i < 100; $i++){
            $this->la[] = rand(1,1000);
        }
    }
    public function tri(){
        while(!empty($this->la)){
            $min_key = array_keys($this->la, min(array_unique($this->la)))[0];
            $middle = array_keys($this->la, $this->la[floor(count($this->la) / 2)])[0];
            $max = array_keys($this->la, max($this->la))[0];
            while(min($this->la) !== $this->la[0]){
                if(max($this->la) === $this->la[0]){
                    constraint::pb($this->la, $this->lb);
                } elseif(max($this->la) === $this->la[count($this->la) - 1]){
                    constraint::rra($this->la);
                    constraint::pb($this->la, $this->lb);
                } elseif($min_key < $middle){
                    constraint::ra($this->la);
                } elseif($min_key >= $middle) {
                    constraint::rra($this->la);
                }
            }
            constraint::pb($this->la, $this->lb);
        }
        $this->returnTola();
    }
    public function generate()
    {
        for($i = 0; $i < 30; $i++){
            $this->la[$i] = rand(0, 100);
        }
    }
    public function returnTola(){
        $var = count($this->lb);
        for ($i = 0; $i < $var; $i++) {
            constraint::pa($this->la, $this->lb);
            if(count($this->la) > 1 && $this->la[0] > $this->la[1]){
                constraint::ra($this->la);
            }
        }
    }
    public function printOperation(){
        foreach(self::$iteration as $key => $value){
            echo $value." ";
        }
        echo "\n".count(self::$iteration)." Operations\n";
    }
}