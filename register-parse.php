<?php
    include("connect.php");

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($result = $mysqli -> query("INSERT INTO forum.users(username, password)
    VALUES ('$username', '$password')")){
        echo "Added user: ".$username;
    }

    $mysqli -> close();
?>