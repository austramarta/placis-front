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
<div class="flexbox">
    <div>
        <nav>
            <div class="nav">
                <div class="brand">
                    <a href="index.php">PLACIS</a>
                </div>
                <ul>
                    <li><a href="index.php">Home</a> <i class='fas fa-chevron-right fa-xs'></i></li>
                    <?php
                    if (isset($_SESSION["username"])) {
                        echo "<li><a href='add_listing.php'>Add listing</a> <i class='fas fa-chevron-right fa-xs'></i></li>";
                        echo "<li><a href='listings.php'>All listings</a><i class='fas fa-chevron-right fa-xs'></i></li>";
                        echo "<li><a href='includes/logout.inc.php'>Log Out</a><i class='fas fa-chevron-right fa-xs'></i></li>";
                    } else {
                        echo "<li><a href='signup.php'>Sign up</a><i class='fas fa-chevron-right fa-xs'></i></li>";
                        echo "<li><a href='login.php'>Log In</a><i class='fas fa-chevron-right fa-xs'></i></li>";
                    }
                    ?>


                </ul>
            </div>

    </div>
    </nav>