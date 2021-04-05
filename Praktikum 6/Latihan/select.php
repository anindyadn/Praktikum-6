<html>
    <head>
        <title> Akses Database Select Data </title>
    </head>
    <body>
        <?php
        $servername = "localhost"; //membuat variable servername
        $username = "root"; // membuat variable username
        $password = ""; //membuat variable password
        $dbname = "myDB"; // membuat variable myDB

        // Membuat koneksi
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        // Cek Koneksi
        if (!$conn) {
            die("connection failed : ". mysqli_connect_error());
            //jika tidak berhasil terkoneksi, akan muncul text connection failed
        }

        $sql = "SELECT kode, negara, champion FROM liga";
        // memilih kolom kode, negara, dan champion pada table liga

        $result = mysqli_query($conn, $sql);
        //memunculkan hasil

        if(mysqli_num_rows($result) > 0){
            //Output data setiap baris
            while($row = mysqli_fetch_assoc($result)) {
                echo "kode : " . $row["kode"] . " - Negara : " . $row["negara"] . " " . $row ["champion"] . "<br>";
            }
        }
        else{
            echo "0 result";
            // muncul text 0 result
        }
        mysqli_close($conn);
        //menutup koneksi database mysqli
        ?>
    </body>
</html>