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
if ($_SESSION['id_dosen']&& $_SESSION['status']=="dosen")
{
	 
?>

<?php include ('menu.php'); ?>

<div id=groupmodul1>
<table id=tablemodul width="1306">               
	<tr>
		<th colspan="2">.</th>
	</tr>
	<tr>
		<td width=180 height=160 hspace=10 border=0>
		<?php include ('dosen_menumatakuliah_menutahunajaran.php'); ?> </td>
        <td>
<table>
		<?php
		
		
			if(isset($_GET['prosesnilai'])) {
			echo "<table>
                  <tr><td width=100><a href=dosen_menumatakuliah.php?&prosesnilai=$_GET[prosesnilai]>Input Nilai</a></td>
                  <td width=100><a href=dosen_menumatakuliah.php?&aturanbobot=$_GET[prosesnilai]>Aturan Penilaian</a></td></tr>
                  </table>";
			include ('dosen_menumatakuliah_prosesnilai.php'); }
		
			else if (isset($_GET['minggu'])&(isset($_GET['inputnilai']))) {
        	echo "<table>
              	  <tr><td width=100><a href=dosen_menumatakuliah.php?&prosesnilai=$_GET[inputnilai]>Input Nilai</a></td>
              	  <td width=100><a href=dosen_menumatakuliah.php?&aturanbobot=$_GET[inputnilai]>Aturan Penilaian</a></td></tr>
			  	  </table>";
			include ('dosen_menumatakuliah_form.php'); }
		
			else if(isset($_GET['aturanbobot'])) {
			echo "<table>
                  <tr><td width=100><a href=dosen_menumatakuliah.php?&prosesnilai=$_GET[aturanbobot]>Input Nilai</a></td>
                  <td width=100><a href=dosen_menumatakuliah.php?&aturanbobot=$_GET[aturanbobot]>Aturan Penilaian</a></td></tr>
				  </table>";
			include ('dosen_menumatakuliah_aturanbobot.php'); }
		
			else if(isset($_GET['aturanrange'])) {
			echo "<table>
                  <tr><td width=100><a href=dosen_menumatakuliah.php?&prosesnilai=$_GET[aturanrange]>Input Nilai</a></td>
                  <td width=100><a href=dosen_menumatakuliah.php?&aturanbobot=$_GET[aturanrange]>Aturan Penilaian</a></td></tr>
                  </table>";
			include ('dosen_menumatakuliah_range.php'); }
   		
			else {
      		include ('dosen_menumatakuliah_listmatakuliah.php'); }
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
