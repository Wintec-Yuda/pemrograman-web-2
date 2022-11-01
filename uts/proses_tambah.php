<?php
include("koneksi.php");

$username = htmlentities(strip_tags(trim($_POST["username"])));
$password = htmlentities(strip_tags(trim($_POST["password"])));
$hak_akses = htmlentities(strip_tags(trim($_POST["hak_akses"])));
$query = "INSERT INTO tbuser VALUES (null, '$username', '$password', $hak_akses)";
$hasil_query = mysqli_query($connect, $query);

if ($hasil_query) {
    $pesan = "Username $username berhasil ditambah";
} else {
    $pesan = "Query gagal dijalankan: " . mysqli_errno($connect) . " - " . mysqli_error($connect);
}
header("Location: index.php?pesan=$pesan");
