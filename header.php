<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placis</title>
    <link rel="stylesheet" href="./css/output.css">
</head>

<nav>
    <div class="nav">
        <a href=""><img class="logo-img" src="./img/avatar.jpg" alt=""></a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php
            if (isset($_SESSION["username"])) {
                echo "<li><a href='add_listing.php'>Add listing</a></li>";
                echo "<li><a href='listings.php'>All listings</a></li>";
                echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
            } else {
                echo "<li><a href='signup.php'>Sign up</a></li>";
                echo "<li><a href='login.php'>Log In</a></li>";
            }
            ?>


        </ul>

    </div>
</nav>