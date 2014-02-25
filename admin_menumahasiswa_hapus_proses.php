<?php
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$id_mahasiswa=$_GET['hapus'];

$sql="DELETE FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa'";
mysql_query($sql);
header( "Location: admin_menumahasiswa.php" ) ;
?>