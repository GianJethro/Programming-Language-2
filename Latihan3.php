<h1>Ubah Data Mahasiswa</h1>

<?php
// Koneksi ke Database
include 'Koneksi.php';
$db = new Database();
$con=$db->Connect();
$npm= $_GET['npm'];

// Mengambil data dari Database
$query=mysqli_query($con,"SELECT * FROM nama WHERE NPM='$npm'")or die(mysql_error());
while($data=mysqli_fetch_array($query)){

// Perintah update ke Database
if(isset($_POST['proses']))
{
$nama= $_POST['Nama'];
$query=mysqli_query($con,"UPDATE nama SET NPM='$npm', Nama='$nama' WHERE NPM='$npm'");
header('location:Latihan1.php');
}

?>

<form action="" method="POST">
NPM <br>
<input type="text" name="NPM" value="<?php echo $data['NPM'] ?>" disabled><br>
Nama <br>
<input type="text" name="Nama" value="<?php echo $data['Nama'] ?>"><br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='Latihan1.php' value='Batal' />
</form>

<?php } ?>