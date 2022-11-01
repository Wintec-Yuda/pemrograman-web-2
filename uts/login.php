<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login T Buser</title>
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <div class="registrasi">
        <div class="container">
            <h2>T Buser</h2>
            <form class="form" action="proses_login.php" method="POST">
                <input type="text" class="input" placeholder="Username" autocomplete="off" required name="username" />
                <input type="password" class="input" placeholder="Password" autocomplete="off" required name="password" />
                <input type="submit" value="Login" class="button">
            </form>
        </div>
    </div>

    <script>
        alert("<?= $_GET['pesan'] ?>")
    </script>
</body>

</html>