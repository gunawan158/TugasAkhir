<?php
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$id_dosen=$_POST['id'];
$nip_dosen=$_POST['nip'];
$nama_dosen=$_POST['nama'];

$sql="UPDATE pendaftaran_dosen SET nip_dosen='$nip_dosen', nama_dosen='$nama_dosen' WHERE id_dosen='$id_dosen'";
mysql_query($sql);
header( "Location: admin_menudosen.php" ) ;
?>
