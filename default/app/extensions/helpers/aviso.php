<?php
class Aviso {
    public static function show($status, $text){
        echo '<script>';
        echo "$.notify( '$text',{ position: 'top center', className: '$status' } )";
        echo '</script>';
    }
    public static function valid($text){
        return self::show("success",$text);
    }
    public static function info($text){
        return self::show("info",$text);
    }
    public static function warning($text){
        return self::show("warn",$text);
    }
    public static function error($text){
        return self::show("error",$text);
    }
}
