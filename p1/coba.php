<?php

echo "Belajar Bahasa Pemrograman PHP<br>";
echo "Belajar Bahasa Pemrograman PHP<br>";
echo "Belajar Bahasa Pemrograman PHP<br>";

$warna = "yellow";
echo "Cat rumahku berwarna " . $warna . "<br>";
// echo "Cat rumahku berwarna " . $Warna . "<br>"; // error
// echo "Cat rumahku berwarna " . $WARNA . "<br>"; // error

$x = 25;
$y = 75;

Function penjumlahan(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

penjumlahan();
echo $z . "<br>";
?>

<html>
    <head>
        <title>Coba 1</title>
    </head>
    <body>
        <?php
            echo "Ini adalah baris pertama <br>";
            echo "Ini adalah baris kedua <br>";
            echo ("Ini adalah baris ketiga <br>");
        ?>
    </body>
</html>