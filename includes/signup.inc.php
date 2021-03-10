<?php
require_once 'dbhandler.inc.php';
require_once 'functions.inc.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username1 = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];



    if (emptyInputSignup($name, $email, $username1, $pwd, $pwdRepeat) !== false) {
        header('location: ../signup.php?error=emptyinput');
        exit();
    }
    if (invalidUid($username1) !== false) {
        header('location: ../signup.php?error=invaliduid');
        exit();
    }
    if (invalidEmail($email) !== false) {
        header('location: ../signup.php?error=invalidemail');
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header('location: ../signup.php?error=passwordsdontmatch');
        exit();
    }

    if (usernameExists($conn, $username1, $email) !== false) {
        header('location: ../signup.php?error=username1taken');
        exit();
    }

    createUser($conn, $name, $email, $username1, $pwd);
} else {
    header('location: ../signup.php');
    exit();
}
