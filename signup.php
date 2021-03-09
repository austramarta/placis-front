<?php
include_once 'header.php';
?>


<div class="signup-form">
    <h2>Sign up</h2>
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
    </div>
</div>



<?php
include_once 'footer.php';
?>