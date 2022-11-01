<?php
session_start();
include 'koneksi.php';
$username = htmlentities(strip_tags(trim($_POST["username"])));
$password = htmlentities(strip_tags(trim($_POST["password"])));
$query = mysqli_query($connect, "SELECT * FROM tbuser WHERE username='$username' AND password='$password'");
if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_array($query);
    $_SESSION['username'] = $username;
    $pesan = "Username $username berhasil login";
    header("Location: index.php?pesan=$pesan");
} else {
    $pesan = "Username $username gagal login";
    header("Location: login.php?pesan=$pesan");
}
