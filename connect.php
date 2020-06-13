<?php

    #as I am just working locally none of this matters if its on github. 
    #if I move this to my server eventually, ill have to stop including this information.

    $database = array();
    $database['host'] = "localhost";
    $database['port'] = "8888";
    $database['name'] = "forum";
    $database['username'] = "root";
    $database['password'] = "root";

    $link = mysqli_connect($database['host'], $database['username'], $database['password']);

    if ($link) {
        echo "Successfully connected to database: ".$database['name']."<br/>";
    } else {
        echo "Failed to connect.";
        echo "Error: ".mysqli_error();
    }

?>