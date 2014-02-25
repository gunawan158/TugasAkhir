<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

$tambahmhs=$_POST['tmbhmahasiswa'];
$tambah=$_POST['pilih'];


mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");


$sql=mysql_query("INSERT INTO mahasiswa (id_matakuliah) VALUES ('$tambahmhs')");
while($data=mysql_fetch_array($sql))
?>