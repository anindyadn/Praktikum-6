<?php
$servername = "localhost"; // membuat varoable servername
$username = "root"; // membuat variable username
$password = ""; //membuat variable password

//membuat koneksi
$conn = mysqli_connect($servername, $username, $password);

//cek koneksi
if (!$conn) {
    die("Connection Failed : ". mysqli_connect_error());
    //jika tidak berhasil terkoneksi, akan muncul text connection failed
}

// membuat database
$sql = "CREATE DATABASE myDB"; // membuat database my DB
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
    //jika database berhasil dibuat akan muncul text Database created successfully
}
else {
    echo "Error creating database : ". mysqli_error($conn);
    //jika database tida berhasil dibuat akan muncu; text Error creating database
}
mysqli_close($conn);
//menutup koneksi database mysqli
?>