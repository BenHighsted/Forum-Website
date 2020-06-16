<!DOCTYPE html>

<?php
    include("headers.php");
?>

<html>

    <head>
        <!-- link rel="stylesheet" href="style.css" -->    
        <title>Sign In</title>
    </head>

    <body>

        <form action="login.php" method="POST">
            Username: <input type="text" name="username" placeholder="Username"/> <br/>
            Password: <input type="password" name="password" placeholder="Password"/> <br/>
            <input type="submit" name="login" value="Sign In"/>
        </form>

    </body>

</html>