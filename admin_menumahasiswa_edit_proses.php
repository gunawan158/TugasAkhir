<?php
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$id_mahasiswa=$_POST['id'];
$nim_mahasiswa=$_POST['nim'];
$nama_mahasiswa=$_POST['nama'];
$angkatan=$_POST['angkatan'];

$sql="UPDATE mahasiswa SET nim_mahasiswa='$nim_mahasiswa', nama_mahasiswa='$nama_mahasiswa', id_angkatan='$angkatan' WHERE id_mahasiswa='$id_mahasiswa'";
mysql_query($sql);
header( "Location: admin_menumahasiswa.php" ) ;
?>
