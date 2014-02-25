<?php 
session_start(); //memulai session
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
<table id=tablemodul width="100%" >               
	<tr>
		<th>Menu Dosen</th>
	</tr>
	<tr>
		<td>
        <?php 
		echo "<div id=groupmodul1><a href=admin_menudosen.php?&tmbhdosen=ok>Tambah Dosen</a></div>";
		
		if(isset($_GET['tmbhdosen'])) {
		include ('admin_menudosen_tambahdosen.php'); }
		
		else if(isset($_GET['dosen'])) {
		include ('admin_menudosen_search.php'); } 
   	  
	    else if(isset($_GET['ubah'])) {
		include ('admin_menudosen_edit.php'); }
		
		else if(isset($_GET['hapus'])) {
		include ('admin_menudosen_hapus_proses.php'); }
	  
   		else {	
	    include ('admin_menudosen_listdosen.php'); }	   
	   ?>
        </td>
	</tr>
</table>
</div>
<div id=footer><center>
Sistem Manajemen Nilai @Teknik Informatika UII
</div>
<?php } ?> 
