<?php 
session_start(); //memulai session
	date_default_timezone_set("Asia/Jakarta");
	$thn=date("Y");
	$tahun1=date("Y")+1;
	$tahunan="$thn/$tahun1";
?>

<?php
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM pendaftaran_dosen WHERE nip_dosen='$username' AND password_dosen='$password'";
$query=mysql_query($sql);

$sql1="SELECT * FROM tahun_ajaran WHERE tahun='$tahunan'";
$query1=mysql_query($sql1);
$hasil1=mysql_num_rows($query1);

$sql2="SELECT * FROM angkatan WHERE tahun_angkatan='$thn'";
$query2=mysql_query($sql2);
$hasil2=mysql_num_rows($query2);

if ($rows=mysql_fetch_array($query)){
session_start();

$_SESSION['id_dosen'] = $rows['id_dosen'];
$_SESSION['status'] = $rows['status'];

} 
if ($_SESSION['id_dosen'] && $_SESSION['status']=="dosen") {
header( "Location: dosen_menumatakuliah.php" ) ;
}

else if ($_SESSION['status']=="administrator" && $hasil1>0 && $hasil2>0 ){ 
header( "Location: admin_menumatakuliah.php" ) ;
}

else if ($_SESSION['status']=="administrator") {
$sql="INSERT INTO tahun_ajaran (tahun) VALUES ('$thn/$tahun1')";
mysql_query($sql);
$sql1="INSERT INTO angkatan (tahun_angkatan) VALUES ('$thn')";
mysql_query($sql1);
header( "Location: admin_menumatakuliah.php" ) ;
}

else {
header( "Location: index.php" ) ;
}

?> 

