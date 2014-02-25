<?php
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$id_makul=$_POST['id_makul'];
$id_kelas=$_POST['id_kelas'];
$id_dosen=$_POST['id_dosen'];
$semester=$_POST['semester'];
$tahun=$_POST['tahun_ajaran'];


$sql="INSERT INTO matakuliah (id_makul, id_kelas, id_dosen, semester, id_tahun ) VALUES('$id_makul','$id_kelas','$id_dosen','$semester','$tahun')";
mysql_query($sql);
header( "Location: admin_menumatakuliah.php" ) ;
?>
