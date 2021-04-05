<?php
$servername = "localhost"; // membuat variable servername
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

$sql = "INSERT INTO liga (kode, negara, champion)
        VALUES ('Jer', 'Jerman', '4'),
                ('spa', 'Spanyol', '3'),
                ('Eng', 'English', '3')";
        //memasukan data pada tabel liga

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    // jika data tabel berhasil masuk akan muncul text New record created successfully
}
else {
    echo "Error : ". $sql . "<br>" . mysqli_error($conn);
    // jika data tabel tidak berhasil masuk akan muncul text Error
}
mysqli_close($conn);
//menutup koneksi database mysqli
?>