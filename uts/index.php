<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

include 'koneksi.php';
$query = "SELECT * FROM tbuser";
$result = mysqli_query($connect, $query);
$no = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>T Buser</title>
</head>

<body>
    <div class="container">
        <h1><?= strtoupper($_SESSION["username"]) ?></h1>
        <nav>
            <span><a href="tambah.php">Tambah</a></span>
            <span><a href="logout.php">Logout</a></span>
        </nav>
        <h2>Data T Buser</h2>
        <table>
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Password</th>
                <th>Hak Akses</th>
                <th>Aksi</th>
            </tr>
            <?php
            while ($data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>$data[username]</td>";
                echo "<td>$data[password]</td>";
                echo "<td>$data[hak_akses]</td>";
                if ($data['username'] == $_SESSION['username']) {
                    echo "<td><a href='tambah.php?id=$data[id_user]'>Edit</a></td>";
                } else {
                    echo "<td><a href='edit.php?id=$data[id_user]&username=$data[username]&password=$data[password]&hak_akses=$data[hak_akses]'>Edit</a> | <a href='proses_hapus.php?id=$data[id_user]&username=$data[username]'>Hapus</a></td>";
                }
                echo "</tr>";
                $no++;
            }

            // bebaskan memory 
            mysqli_free_result($result);

            // tutup koneksi dengan database mysql
            mysqli_close($connect);
            ?>
        </table>
    </div>

    <script>
        alert("<?= $_GET['pesan'] ?>")
    </script>
</body>

</html>