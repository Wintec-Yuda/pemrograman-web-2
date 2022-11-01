<?php
include("koneksi.php");

$id = $_GET["id"];
$username = $_GET["username"];
$query = "DELETE FROM tbuser WHERE id_user='$id'";
$hasil_query = mysqli_query($connect, $query);

if ($hasil_query) {
    $pesan = "Username $username berhasil dihapus";
} else {
    $pesan = "Query gagal dijalankan: " . mysqli_errno($connect) . " - " . mysqli_error($connect);
}
header("Location: index.php?pesan=$pesan");
