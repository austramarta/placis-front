<?php
include_once 'header.php';
?>


<div class="login-form">
    <h2>Log in</h2>
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



<?php
include_once 'footer.php';
?>