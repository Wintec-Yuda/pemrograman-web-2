<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papan Catur</title>
    <style>
        body {
            background: aliceblue;
            font-family: sans-serif;
        }

        label,
        h1 {
            color: whitesmoke;
        }

        h1 {
            text-align: center;
        }

        td {
            color: whitesmoke;
            font-size: 16px;
        }

        .container {
            width: 335px;
            background: #2F495C;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 10px 20px 0px #D1D1D1;
            display: inline-block;
        }

        .input {
            width: 300px;
            text-align: center;
            margin: 5px;
            border: none;
            font-size: 16px;
            border-radius: 5px;
            padding: 10px;
        }

        .submit {
            width: 315px;
            margin: 10px 5px;
            background: red;
            border: none;
            border-radius: 5px;
            padding: 10px;
            color: #eee;
            font-size: 16px;
            border-bottom: 4px solid #BF3D3D;
        }

        .td{
            height: 40px;
        }

        .black{
            background-color: black;
        }

        .white{
            background-color: white;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['submit'])) {
        $panjang = $_GET['panjang'];
        $lebar = $_GET['lebar'];
    }
    ?>
    <div class="container">
        <h1>Papan Catur</h1>
        <form method="get" action="papan_catur.php">
            <label for="panjang">Panjang</label>
            <input type="number" id="panjang" name="panjang" class="input" required>
            <label for="lebar">Lebar</label>
            <input type="number" id="lebar" name="lebar" class="input" required>
            <input type="submit" value="Buat" class="submit" name="submit">
        </form>
    </div>
    <?php if (isset($_GET['submit'])) : ?>
        <div class="container" style="width:90%">
            <table width="100%" cellspacing="0px">
                <?php
                $value = 0;
                for ($col = 0; $col < $panjang; $col++) : ?>
                    <tr>
                        <?php $value = $col; ?>
                        <?php for ($row = 0; $row < $lebar; $row++) : ?>
                            <?php if ($value % 2 == 0) : ?>
                                <td class="td black"></td>
                            <?php else : ?>
                                <td class="td white"></td>
                            <?php endif ?>
                            <?php $value++; ?>
                        <?php endfor ?>
                    </tr>
                <?php endfor ?>
            </table>
        </div>
    <?php endif ?>
</body>

</html>