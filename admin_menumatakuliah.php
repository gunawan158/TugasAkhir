<?php 
session_start(); //memulai session
	date_default_timezone_set("Asia/Jakarta");
	$tahun=date("Y");
	$tahun1=date("Y")+1;
?>
<title>SISTEM MANAJEMEN NILAI</title>
<link rel="stylesheet" href="css/all.css" type="text/css" />


<style type="text/css">
</style>
<body>
<?php 
if ($_SESSION['status']=="administrator")
{
?>
<?php include ('menu.php'); ?>

<div id=groupmodul1>
<table id=tablemodul width="100%">               
	<tr>
        <th>PILIH TAHUN AJARAN DAN SEMESTER</th>
</tr>
    <tr>
    
<table>
   <?php 
   include ('admin_menumatakuliah_sort.php');
   
   if(isset($_GET['pilih_makul'])or isset($_GET['tahun_makul'])or isset($_GET['semester'])) {
   include ('admin_menumatakuliah_listkelas.php'); } 
   
   else if(isset($_GET['tmbhmakul'])) {
   include ('admin_menumatakuliah_tambahmatakuliah.php'); }
   
   else if(isset($_GET['tmbhkelas'])) {
   include ('admin_menumatakuliah_tambahkelas.php'); }
   
   else if(isset($_GET['infokelas'])) {
   include ('admin_menumatakuliah_listkelas_informasi.php'); }
   
   else if(isset($_GET['tmbhmahasiswa'])) {
   include ('admin_menumatakuliah_tambahmahasiswa.php'); }
   
   else if(isset($_GET['lhtnilai'])) {
   include ('.php'); }
   
    else if(isset($_GET['ubhkelas'])) {
   include ('admin_menumatakuliah_listkelas_ubah.php'); }
  
   else if(isset($_GET['hpskelas'])) {
   include ('admin_menumatakuliah_listkelas_hapus.php'); }
   
   
   else if(isset($_GET['tahun'])) {
   include ('admin_menumatakuliah_tambahmahasiswa_sort.php'); }
		
   else if(isset($_GET['nama'])) {
   include ('admin_menumatakuliah_tambahmahasiswa_search.php'); }
   ?>
</table>
        </td>
	</tr>
</table>
</div>
<div id=footer><center>
Sistem Manajemen Nilai @Teknik Informatika UII
</div>
<?php } ?> 
