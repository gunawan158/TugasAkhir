<?php
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$hapus=$_GET['hpsmakul'];

$sql="DELETE FROM makul WHERE id_makul='$hapus'";
mysql_query($sql);
header( "Location: admin_menumatakuliah.php" ) ;
?>