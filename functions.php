<?php

    /**  */
    function hasInvalidCharacters($text) {
        if(preg_match('/^[A-Z\d]+$/i', $text)) { 
            return false; //false, does not contain invalid characters
        }
        return true;
    }

?>