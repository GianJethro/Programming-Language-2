<?php

// Koneksi ke Database
include 'Koneksi.php';
$db = new Database();
$con=$db->Connect();
 
// Ambil data berdasarkan NPM Mahasiswa
$npm= $_GET['NPM'];
 
// Perintah delete data berdasarkan NPM Mahasiswa
$query=mysqli_query($con,"DELETE FROM nama WHERE NPM=$npm")or die(mysql_error());
 

header('location:Latihan1.php');
?>