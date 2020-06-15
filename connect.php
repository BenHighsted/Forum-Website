<?php

    #as I am just working locally none of this matters if its on github. 
    #if I move this to my server eventually, ill have to stop including this information.

    $database = array();
    $database['host'] = "localhost";
    $database['port'] = "8888";
    $database['name'] = "forum";
    $database['username'] = "root";
    $database['password'] = "root";

    $mysqli = new mysqli($database['host'], $database['username'], $database['password'], $database['name']);

    //Checks connection (will only echo on error)
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
?>