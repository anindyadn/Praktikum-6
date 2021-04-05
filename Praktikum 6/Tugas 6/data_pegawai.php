<html>
    <head>
        <title> Data Pegawai </title>
        <style>
            body{
                background-color: gold;
            }
        </style>
    </head>
    <body>
        <center><h2> Golden Company </h2></center>
        <center><h3> Data Pegawai </h3></center>
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

        $sql = "SELECT * FROM pegawai";
        $result = mysqli_query($conn, $sql);
        //mengambil data pada tabel pegawai

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
                echo "<br>";
                echo "Nama : " . $row["nama"] . "<br>Email : " . $row["email"] . "<br>Alamat : " . $row["alamat"] . "<br>";
                echo "<tr>
                    <td> <a href='edit_pegawai.php?id=$row[id_pegawai]'> Edit </a> </td>
                    ||
                    <td> <a href='?id=$row[id_pegawai]'> Hapus </a> </td>
                    </tr><br>";
                    //menampilkan data - data dan tombol edit & hapus
            }
        }
        else{
            echo "Data tidak ada";
            //jika data tidak ada maka muncul text Data tidak ada
        }

        echo"<br><form action='tambah_pegawai.php'><input type='submit' name='tambah' value='Tambahkan Data Pegawai'></form>";
        //tombol tambah data pegawai

        mysqli_close($conn);
        //menutup koneksi database mysqli
        ?>
    </body>
</html>

<?php
//membuat variable
$servername="localhost";
$username="root";
$password="";
$dbname="golden";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

if(isset($_GET['id'])){

    //menghapus data
	$sql= "DELETE FROM pegawai WHERE id_pegawai='$_GET[id]'";
	if(mysqli_query($conn, $sql)){
		echo "Data telah berhasil dihapus";
		
        //menuju ke halaman data pegawai setelah terhapus
		echo "<meta HTTP-EQUIV='REFRESH' content='2; url=data_pegawai.php'>";
	} 
    else{
		echo "Error: ". $sql ."<br>". mysqli_error($conn);
	}
	
	mysqli_close($conn);
    //menutup koneksi database mysqli	
}
?>