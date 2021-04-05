<?php
$servername = "localhost"; //membuat variable servername
$username = "root"; // membuat variable username
$password = ""; // membuat variable password
$dbname = "myDB"; // membuat variable dbname

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek Koneksi
if (!$conn) {
    die("connection failed : ". mysqli_connect_error());
    //jika tidak berhasil terkoneksi, akan muncul text connection failed
}

$sql = "CREATE TABLE liga (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    kode VARCHAR(3) NOT NULL,
    negara VARCHAR(30) NOT NULL,
    champion int(3))";
    //membuat table liga dengan kolom id, kode, negara, dan champion

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    //jika table berhasil dibuat akan muncul teks New record created successfully
}
else {
    echo "Error : ". $sql . "<br>" . mysqli_error($conn);
    //jika table tidak berhasil dibuat maka akan muncul text Error
}
mysqli_close($conn);
//menutup koneksi database mysqli
?>