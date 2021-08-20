<h1>Daftar Mahasiswa</h1>
<table border="1 px">
<tr>
<th> NPM </th>
<th> Nama </th>
</tr>

<?php

// Koneksi ke Database
include 'Koneksi.php';
$db = new Database();
$con=$db->Connect();

// Mengambil data dari Database
$query=mysqli_query($con,"select * nama from ");
while($data=mysqli_fetch_array($query)){

// Menampilkan data dari Database	
echo "<tr>";
echo "<th>"; echo $data['NPM']; echo "</th>";
echo "<th>"; echo $data['Nama']; echo "</th>";
echo "<th>"; echo "<a href='Latihan3.php?npm=$data[npm]'>Ubah</a> | <a href='Latihan4.php?npm=$data[npm]'>Hapus</a>"; echo "</th>";
echo "</tr>";
}
?>

</table>
<br>
<input type='button' onclick=location.href='Latihan2.php' value='Tambah Data' />
