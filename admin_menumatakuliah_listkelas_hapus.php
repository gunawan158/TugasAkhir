<?php
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$hapus=$_GET['hpskelas'];

$sql="DELETE FROM matakuliah WHERE id_matakuliah='$hapus'";
mysql_query($sql);
header( "Location: admin_menumatakuliah.php" ) ;
?>