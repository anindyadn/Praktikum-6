<?php
        //membuat variable
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $dbname = "golden";
        
        // Membuat koneksi
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        //cek koneksi
        if (!$conn) {
            die("Connection Failed : ". mysqli_connect_error());
        }

        $sql = "SELECT * FROM pegawai WHERE id_pegawai = $_GET[id]";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        //mengambil data pada tabel pegawai
?>
<html>
    <head>
        <title> Edit Data Pegawai </title>
        <style>
            body{
                background-color: gold;
            }
        </style>
    </head>
    <body>
        <center><h2> Golden Company </h2></center>
        <center><h3> Edit Data Pegawai </h3></center>
        <form method="POST" action="#">
            <table width="400" cellpadding="2" cellspacing="2">
                <tr>
                    <td width="130"> Nama : </td>
                    <td> <input type="text" name="nama" value="<?php echo $row['nama']?>" required> </td>
                </tr>
                <tr>
                    <td width="130"> Email : </td>
                    <td> <input type="text" name="email" value="<?php echo $row['email']?>" required> </td>
                </tr>
                <tr>
                    <td width="130"> Alamat : </td>
                    <td> <input type="text" name="alamat" value="<?php echo $row['alamat']?>" required> </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="edit" value="Submit"> </td>
                </tr>
            </table>
        </form>
        <form action="data_pegawai.php">
            <input type="submit" value="Cancel">
        </form>
    </body>
</html>
<?php
        //membuat variable
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $dbname = "golden";
        
        // Membuat koneksi
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        //cek koneksi
        if (!$conn) {
            die("Connection Failed : ". mysqli_connect_error());
        }

        if(isset($_POST['edit'])){

            //mengedit data
            $sql= "UPDATE pegawai SET nama='$_POST[nama]', email='$_POST[email]', alamat='$_POST[alamat]' WHERE id_pegawai='$_GET[id]'";
            if(mysqli_query($conn, $sql)){
                echo "Data telah berhasil diedit";
                
                //menuju ke halaman data pegawai setelah berhasil diedit
                echo "<meta HTTP-EQUIV='REFRESH' content='2; url=data_pegawai.php'>";
            } 
            else{
                echo "Error: ". $sql ."<br>". mysqli_error($conn);
            }
            
            mysqli_close($conn);
            //menutup koneksi database mysqli	
        }
?>