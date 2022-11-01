<?php
include("koneksi.php");

$id = $_GET["id"];
$username = $_GET["username"];
$password = $_GET["password"];
$hak_akses = $_GET["hak_akses"];

echo $id;
echo $username;
echo $password;
echo $hak_akses;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit T Buser</title>
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <div class="registrasi">
        <div class="container">
            <h2>T Buser</h2>
            <form class="form" action="proses_edit.php" method="POST">
                <input type="hidden" name="id" value="<?=$id ?>">
                <input type="text" class="input" placeholder="Username" autocomplete="off" required name="username" value="<?= $username ?>" />
                <input type="password" class="input" placeholder="Password" autocomplete="off" required name="password" value="<?= $password ?>" />
                <input type="number" class="input" placeholder="Hak Akses" autocomplete="off" required name="hak_akses" value="<?= $hak_akses ?>" />
                <input type="submit" value="Edit" class="button">
            </form>
        </div>
    </div>
</body>

</html>