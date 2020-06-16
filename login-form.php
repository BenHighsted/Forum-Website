<!DOCTYPE html>

<?php
    include("headers.php");
?>

<html>

    <head>
        <link rel="stylesheet" href="style.css">
        <title>Sign In</title>
    </head>

    <body>
        <div class="detail-container">

            <form action="login.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Username"/> <br/>
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password"/> <br/>

                <input type="submit" name="login" value="Sign In"/>
            </form>

        </div>  
    </body>

</html>