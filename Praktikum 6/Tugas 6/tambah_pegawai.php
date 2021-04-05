<html>
    <head>
        <title> Tambah Pegawai </title>
        <style>
            body{
                background-color: gold;
            }
        </style>
    </head>
    <body>
        <center><h2> Golden Company </h2></center>
        <center><h3> Tambah Data Pegawai </h3></center>
        <form method="POST" action="#">
            <table width="400" cellpadding="2" cellspacing="2">
                <tr>
                    <td width="130"> Nama : </td>
                    <td> <input type="text" name="nama" required> </td>
                </tr>
                <tr>
                    <td width="130"> Email : </td>
                    <td> <input type="text" name="email" required> </td>
                </tr>
                <tr>
                    <td width="130"> Alamat : </td>
                    <td> <input type="text" name="alamat" required> </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="simpan" value="Submit"> </td>
                    <td> <input type="reset" name="reset" value="Reset"> </td>
                </tr>
            </table>
        </form>
        <form action="data_pegawai.php">
            <input type="submit" value="Cancel">
        </form>
    </body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="golden";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

if(isset($_POST['simpan'])){

    //menambahkan data pegawai
	$sql= "INSERT INTO pegawai(nama, email, alamat, id_jabatan) VALUES ('$_POST[nama]', '$_POST[email]', '$_POST[alamat]', '4')";
	if(mysqli_query($conn, $sql)){
		echo "Data Pegawai telah Berhasil ditambahkan";
		
        //menuju ke halaman data pegawai setelah berhasil ditambahkan
		echo "<meta HTTP-EQUIV='REFRESH' content='2; url=data_pegawai.php'>";
	} else{
		echo "Error: ". $sql ."<br>". mysqli_error($conn);
	}
	
	mysqli_close($conn);
    //menutup koneksi database mysqli	
}
?>