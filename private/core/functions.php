<?php
    function get_var($key){
        if(isset($_POST[$key])){
            return $_POST[$key];
        }
        return "";
    }

    function get_select($key,$value){
        if(isset($_POST[$key])){
            if($_POST[$key] == $value){
                return "selected";
            }
        }
        return "";
    }

    function esc($var){
        return htmlspecialchars($var);
    }

    function random_string($length){

        $array = array("0","1","2","3","4","5","6", "7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","nn","o","p","q","r");
        $text = "";

        for ($i = 0; $i < $length; $i++){
            $random = rand(0,61);
            $text .= $array[$random];
        }
        return $text;
    }


?>