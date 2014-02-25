<?php
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$nim_mahasiswa=$_POST['nim_mahasiswa'];
$nama_mahasiswa=$_POST['nama_mahasiswa'];
$angkatan=$_POST['angkatan'];

$sql="INSERT INTO mahasiswa (nim_mahasiswa, nama_mahasiswa, id_angkatan) VALUES('$nim_mahasiswa','$nama_mahasiswa','$angkatan')";
mysql_query($sql);
header( "Location: admin_menumahasiswa.php" ) ;
?>
