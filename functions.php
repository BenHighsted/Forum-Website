<?php

    /**  */
    function hasInvalidCharacters($text) {
        if(!preg_match('/^[a-zA-Z0-9]{5,}$/', $text)) { 
            return true;
        }
        return false;
    }

?>