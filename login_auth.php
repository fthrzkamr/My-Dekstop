<?php
session_start();
include 'dist/config/config.php';

if (isset($_POST['login'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        header("Location: login.php?err=empty");
        exit();
    } else {
        $username = htmlentities(trim(strip_tags($_POST['username'])));
        $password = htmlentities(trim(strip_tags($_POST['password'])));

        $sql = "SELECT * FROM user_dfm WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $user = mysqli_fetch_assoc($result);

            // Gunakan pencocokan langsung karena password tidak di-hash
            if ($password === $user['password']) {
                $_SESSION['id_user'] = $user['id_user'];
                $_SESSION['nama_user'] = $user['nama_user'];
                header("Location: dashboard.php");
                exit();
            } else {
                header("Location: login.php?err=wrongpass");
                exit();
            }
        } else {
            header("Location: login.php?err=nouser");
            exit();
        }
    }
} else {
    header("Location: login.php");
    exit();
}