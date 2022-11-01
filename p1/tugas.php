<?php
// lokasi direktori file mulai dari folder htdocs
echo $_SERVER['PHP_SELF'] . "<br>";
// protocol gateway yang menguhubungkan aplikasi dengan web server
echo $_SERVER['GATEWAY_INTERFACE'] . "<br>";
// alamat ip address server
echo $_SERVER['SERVER_ADDR'] . "<br>";
// hostname server
echo $_SERVER['SERVER_NAME'] . "<br>";
// jenis aplikasi server
echo $_SERVER['SERVER_SOFTWARE'] . "<br>";
// jenis server protocol
echo $_SERVER['SERVER_PROTOCOL'] . "<br>";
// jenis request method
echo $_SERVER['REQUEST_METHOD'] . "<br>";
// waktu request dalam satuan timestamp
echo $_SERVER['REQUEST_TIME'] . "<br>";
// respon dari server
echo $_SERVER['QUERY_STRING'] . "<br>";
// request header aplikasi
echo $_SERVER['HTTP_ACCEPT'] . "<br>";
// $_SERVER['HTTP_ACCEPT_CHARSET']; error
// hostname server
echo $_SERVER['HTTP_HOST'] . "<br>";
// $_SERVER['HTTP_REFERER']; error
// $_SERVER['HTTPS'] . "<br>"; error
// alamat ip address user
echo $_SERVER['REMOTE_ADDR'] . "<br>";
// $_SERVER['REMOTE_HOST']; error
// jenis port user
echo $_SERVER['REMOTE_PORT'] . "<br>";
// lokasi direktori file lengkap 
echo $_SERVER['SCRIPT_FILENAME'] . "<br>";
// hostname dari admin server
echo $_SERVER['SERVER_ADMIN'] . "<br>";
// jenis port server
echo $_SERVER['SERVER_PORT'] . "<br>";
// jenis aplikasi server
echo $_SERVER['SERVER_SIGNATURE'] . "<br>";
// 
// $_SERVER['PATH_TRANSLATED']; error
// lokasi direktori file script mulai dari folder htdocs
echo $_SERVER['SCRIPT_NAME'] . "<br>";
// $_SERVER['SCRIPT_URI']; error