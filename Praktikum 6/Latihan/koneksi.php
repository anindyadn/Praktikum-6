<html>
    <head>
        <title> Koneksi Database MySQL </title>
    </head>
    <body>
        <h1> Demo Koneksi Database MySQL </h1>
        <?php
        // membuat koneksi
        $conn = mysqli_connect("localhost", "root", "", "my_db");

        // Cek Koneksi
        if (mysqli_connect_error()) {
            echo "Failed to connect to MySQL : ". mysqli_connect_error();
            exit();
            //jika koneksi tidak berhasil akan muncul text Failed to connect to MySQL
        }
        ?>
    </body>
</html>