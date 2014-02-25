<?php
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");
$nama_makul=$_POST['nama_makul'];
$sql="INSERT INTO makul (nama_makul) VALUES('$nama_makul')";
mysql_query($sql);
header( "Location: admin_menumatakuliah.php" ) ;
?>
