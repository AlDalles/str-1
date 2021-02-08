<?php


namespace Hillel\Str;


class Str

{
    public static function after($subject, $after){
        $position=strpos($subject,$after);
        echo "position is ".$position."<br>";
        if($position===false){
            return $subject;
        }
        $str_lend = mb_strlen($after);
        return substr($subject,$position+$str_lend );


    }
    public static function afterLast($subject, $after){
        $position=strrpos($subject,$after);
        if($position===false){
            return $subject;
        }
        $str_lend = mb_strlen($after);
        return substr($subject,$position+$str_lend );
    }
}