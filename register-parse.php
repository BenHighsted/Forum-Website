<?php
    include("connect.php"); //creates a connection to the MySQL server
    include("functions.php");

    $username = $_POST["username"];
    $password = $_POST["password"];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT); //encrypts password

    $USERNAME_LENGTH = 3;
    $PASSWORD_LENGTH = 8;

    //below is just some basic server-side validation, will do some front end validation later but this will do for now.
    if ($username == "") {
        echo "Username can not be blank";
    } else if ($password == "") {
        echo "Password can not be blank";
    } else if (hasInvalidCharacters($username)) {
        echo "Username must only contain letters a-Z and numbers";
    } else if (hasInvalidCharacters($password)) {
        echo "Password must only contain letters a-Z and numbers";
    } else if (strlen($username) < $USERNAME_LENGTH) {
        echo "Username must be a minimum of 3 characters long";
    } else if (strlen($password) < $PASSWORD_LENGTH) {
        echo "Password must be a minimum of 8 characters long";
    }else {
        if ($result = $mysqli -> query("INSERT INTO forum.users(username, password)
        VALUES ('$username', '$hashed_password')")){
            echo "Added user: ".$username;
        } else {
            echo "Error: Failed to create new user. Is your database setup correctly?";
        }
    }

    $mysqli -> close();
?>