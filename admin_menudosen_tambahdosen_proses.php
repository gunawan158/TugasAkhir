<?php
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$nip_dosen=$_POST['nip'];
$nama_dosen=$_POST['nama'];


$sql="INSERT INTO pendaftaran_dosen (nip_dosen, nama_dosen, password_dosen, status) VALUES('$nip_dosen','$nama_dosen','1234','dosen')";
mysql_query($sql);
header( "Location: admin_menudosen.php" ) ;
?>
