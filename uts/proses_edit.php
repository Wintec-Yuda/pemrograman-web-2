<?php
include("koneksi.php");

$id = htmlentities(strip_tags(trim($_POST["id"])));
$username = htmlentities(strip_tags(trim($_POST["username"])));
$password = htmlentities(strip_tags(trim($_POST["password"])));
$hak_akses = htmlentities(strip_tags(trim($_POST["hak_akses"])));
$query = "UPDATE tbuser SET username='$username', password='$password', hak_akses=$hak_akses WHERE id_user=$id";
$hasil_query = mysqli_query($connect, $query);

if ($hasil_query) {
    $pesan = "Username $username berhasil diedit";
} else {
    $pesan = "Query gagal dijalankan: " . mysqli_errno($connect) . " - " . mysqli_error($connect);
}
header("Location: index.php?pesan=$pesan");
