<?php
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$id_dosen=$_GET['hapus'];


$sql="DELETE FROM pendaftaran_dosen WHERE id_dosen='$id_dosen'";
mysql_query($sql);
header( "Location: admin_menudosen.php" ) ;
?>