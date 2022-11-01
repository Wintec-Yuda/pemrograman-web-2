<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
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

        .kalkulator {
            width: 335px;
            background: #2F495C;
            margin: 100px auto;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 10px 20px 0px #D1D1D1;
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

        .option {
            font-size: 16px;
            text-align: center;
            border: none;
            width: 315px;
            margin: 5px;
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
    </style>
</head>

<body>
    <?php
    if (isset($_GET['submit'])) {
        $angka1 = $_GET['angka1'];
        $angka2 = $_GET['angka2'];
        $operasi = $_GET['operasi'];
        switch ($operasi) {
            case 'tambah':
                $hasil = $angka1 + $angka2;
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                break;
            case 'kali':
                $hasil = $angka1 * $angka2;
                break;
            case 'bagi':
                $hasil = $angka1 / $angka2;
                break;
        }
    }
    ?>
    <div class="kalkulator">
        <h1>KALKULATOR</h1>
        <form method="get" action="kalkulator.php">
            <label for="angka1">Angka Pertama</label>
            <input type="number" id="angka1" name="angka1" class="input" required>
            <label for="angka2">Angka Kedua</label>
            <input type="number" id="angka2" name="angka2" class="input" required>
            <label for="operasi">Operasi</label>
            <select class="option" id="operasi" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" value="Hitung" class="submit" name="submit">
        </form>
        <?php if (isset($_GET['submit'])) { ?>
            <label for="hasil">Hasil</label>
            <input type="text" value="<?php echo $hasil; ?>" class="input" readonly>
        <?php } else { ?>
            <label for="hasil">Hasil</label>
            <input type="text" value="" class="input" readonly>
        <?php } ?>
    </div>
</body>

</html>