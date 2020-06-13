<?php

    include("connect.php");

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO forum.users(username, password)
            VALUES ('$username', '$password')";

    mysqli_query($link, $sql, $result);

    if ($result) {
        echo "Successfully added user: ".$username;
    } else {
        echo "Failed to add user.<br/>";
        echo "Error: ".mysqli_error();
    }

?>