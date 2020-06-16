<?php
    include("connect.php");

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "") {
        echo "Username can not be blank";
    } else if ($password == "") {
        echo "Password can not be blank";
    } else {
        // query database to find the username they entered, and check if the passwords match
        if ($result = $mysqli -> query("
            SELECT * from forum.users
            WHERE username = '$username';"
            )) 
        {
            $row = $result -> fetch_assoc();

            if(password_verify($password, $row['password'])){
                echo "Good work! You're password is correct :)";
            } else {
                echo "Incorrect password.";
            }
        } else {
            echo "Username not found in database";
        }
    }

?>