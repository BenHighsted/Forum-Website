<?php
    include("connect.php"); //creates a connection to the MySQL server
    include("functions.php");

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "") {
        echo "Username can not be blank";
    } else if ($password == "") {
        echo "Password can not be blank";
    } else if (hasInvalidCharacters($username)) {
        echo "Username must only contain letters a-Z and numbers";
    } else if (strlen($username) < 3) {
        echo "Username must be a minimum of 3 characters long";
    } else if (strlen($password) < 8) {
        echo "Password must be a minimum of 8 characters long";
    }else {
        echo "Validated. Adding to database code will be moved into here";
    }

    // if ($result = $mysqli -> query("INSERT INTO forum.users(username, password)
    // VALUES ('$username', '$password')")){
    //     echo "Added user: ".$username;
    // } else {
    //     echo "Failed to create new user. Make sure you fill in both Username and Password.";
    // }

    $mysqli -> close();
?>