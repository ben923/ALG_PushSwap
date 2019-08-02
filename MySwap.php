<?php 
class constraint
{
    public static function sa(&$aa){
        array_push(PushNSwap::$iteration, "sa");
        $temp = $aa[1];
        array_unshift($aa, $temp);

    }
    public static function sb(&$ab){
        array_push(PushNSwap::$iteration, "sb");
        $temp = $ab[0];
        $ab[0] = $ab[1];
        echo $ab[0]."\n";
        $ab[1] = $temp;
        echo $ab[1]."\n";
        // array_unshift($ab, $temp);

    }
    public static function sc(&$aa, &$ab){
        array_push(PushNSwap::$iteration, "sc");
        $tempA = $aa[1];
        $tempB = $ab[1];
        array_unshift($ab, $tempB);
        array_unshift($aa, $tempA);

    }
    public static function rra(&$arr){
        array_push(PushNSwap::$iteration, "rra");
        $temp = array_pop($arr);
        array_unshift($arr, $temp);
    }
    public static function ra(&$arr){
        array_push(PushNSwap::$iteration, "ra");
        $temp = array_shift($arr);
        array_push($arr, $temp);
    }
    public static function pb(&$aa, &$ab){
        array_push(PushNSwap::$iteration, "pb");
        $temp = array_shift($aa);
        array_unshift($ab, $temp);
    }
    public static function pa(&$aa, &$ab){
        array_push(PushNSwap::$iteration, "pa");
        $temp = array_shift($ab);
        array_unshift($aa, $temp);
    }
}