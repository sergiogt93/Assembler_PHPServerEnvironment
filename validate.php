<?php
    $userDB = "sergio";
    $passDB = "12345";

    session_start();

    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user === $userDB && $pass === $passDB) {
        $_SESSION['username'] = $user;
        header("Location:panel.php");
    } else {
        header("Location:index.php");
    }