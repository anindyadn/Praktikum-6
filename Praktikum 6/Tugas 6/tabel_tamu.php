<?php
//membuat variable
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "bukutamu"; 

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek Koneksi
if (!$conn) {
    die("connection failed : ". mysqli_connect_error());
    //jika tidak berhasil terkoneksi, akan muncul text connection failed
}

$sql = "CREATE TABLE buku_tamu (
    id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200) NOT NULL,
    email VARCHAR(50) NOT NULL,
    isi text)";
    //membuat table buku_tamu dengan kolom id_bt, nama, email, dan isi

if (mysqli_query($conn, $sql)) {
    echo "Tabel Berhasil Dibuat";
    //jika table berhasil dibuat akan muncul teks Tabel Berhasil Dibuat
}
else {
    echo "Error : ". $sql . "<br>" . mysqli_error($conn);
    //jika table tidak berhasil dibuat maka akan muncul text Error
}
mysqli_close($conn);
//menutup koneksi database mysqli
?>