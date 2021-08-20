<h1>Input Mahasiswa</h1>

<?php

// Koneksi ke Database
include 'Koneksi.php';
$db = new Database();
$con=$db->Connect();

// Perintah insert data ke Database
if(isset($_POST['proses']))
{
$query=mysqli_query($con,"insert into nama values(
'".$_POST['NPM']."',
'".$_POST['Nama']."'
)");

header('location:Latihan1.php');
}
?>
<form action="" method="POST">
NPM <br>
<input type="text" name="NPM"><br>
Nama <br>
<input type="text" name="Nama"><br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='Latihan1.php' value='Batal' />
</form>