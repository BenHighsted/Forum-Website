<!DOCTYPE html>

<?php
    include("headers.php");
?>

<html>

    <head>
        <!-- link rel="stylesheet" href="style.css" -->    
        <title>Forum Website Project</title>
    </head>

    <body>
        <?php
            if ($_SESSION["logged-in"]) {
                $username = $_SESSION['username'];
                echo "<p> Welcome $username! </p>";
            } else {
        ?>
                <p><a href="login-form.php">Login</a></p>
        <?php
            }
        ?>

    </body>

</html>