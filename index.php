<!DOCTYPE html>

<?php
    include("headers.php");
    include("connect.php");
?>

<html>

    <head>
        <link rel="stylesheet" href="style.css">    
        <title>Forum Website Project</title>
    </head>

    <body>
        <header> 
            <h1> Forum Website </h1>
            <hr/>
        </header>

        <main>
            <?php
                if ($_SESSION['logged-in']) {
                    $username = $_SESSION['username'];
                    echo "<p> Welcome $username! This forum is a personal project by Ben Highsted.</p>";
                } else {
            ?>
                    <p><a href="login-form.php">Login</a></p>
            <?php
                }
            ?>

            <?php 
                if($_SESSION['logged-in']) {
            ?>
                    <form action="index.php" method="POST">
                        <input type="submit" value="Logout" name="logout" class="logout"/>
                    </form>

            <?php 
                    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['logout'])) {
                        $_SESSION['logged-in'] = false; 
                        header("Location: index.php"); 
                    }
                }
            ?>

            <?php
                $select = mysqli_query($mysqli, "SELECT * FROM categories");
                while($row = mysqli_fetch_assoc($select)) {
                    echo "<h2>".$row['category_title']."</h2>";
                }
            ?>

        </main>

        <footer> 
                <p> Note: this website was a personal project by Ben Highsted, and has no real purpose. </p>
        </footer>

    </body>

</html>