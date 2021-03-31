<?php
include_once 'header.php';
?>

<div class="main">

    <body>
        <h1>Sign up</h1>
        <div>
            <form action="includes/signup.inc.php " method="POST">
                <div>
                    <input type="text" name="name" placeholder="Full name">
                </div>
                <div>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div>
                    <input type="text" name="uid" placeholder="Username">
                </div>
                <div>
                    <input type="password" name="pwd" placeholder="Password">
                </div>
                <div>
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                </div>

                <button type="submit" name="submit">Sign Up</button>
            </form>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Please fill in all required fields</p>";
                } else if ($_GET["error"] == "invaliduid") {
                    echo "<p>Please choose a proper username</p>";
                } else if ($_GET["error"] == "invalidemail") {
                    echo "<p>Please choose a proper email</p>";
                } else if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p>Passwords do not match</p>";
                } else if ($_GET["error"] == "stmtfailed") {
                    echo "<p>Something went wrong, please try again</p>";
                } else if ($_GET["error"] == "usernametaken") {
                    echo "<p>Sorry, this username already exists</p>";
                } else if ($_GET["error"] == "none") {
                    echo "<p>You have successfuly signed up!</p>";
                }
            }
            ?>
        </div>
    </body>
</div>