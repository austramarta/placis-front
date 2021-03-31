<?php
include_once 'header.php';
?>

<body>
    <div class="main">


        <h1>Log in</h1>
        <div>
            <form action="includes/login.inc.php " method="POST">
                <div>
                    <input type="text" name="uid" placeholder="Username/Email">
                </div>
                <div>
                    <input type="password" name="pwd" placeholder="Password">
                </div>
                <button type="submit" name="submit">Log In</button>
            </form>
        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Please fill in all required fields</p>";
            } else if ($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect login information</p>";
            }
        }
        ?>
    </div>
</body>