<div id="tabelsystem">
<div id="top">
<ul class="nav">
 <?php 
if ($_SESSION['status']=="dosen")
{
?>
 	<li><a href="dosen_menumatakuliah.php">Mata Kuliah</a>
<?php } ?> 
<?php 
if ($_SESSION['status']=="administrator")
{
?>
    <li><a href="admin_menumatakuliah.php">Mata Kuliah</a></li>
    <li><a href="admin_menudosen.php">Dosen</a> </li>
	<li><a href="admin_menumahasiswa.php">Mahasiswa</a> </li>
    
<?php } ?> 
 <li><a href="logout.php">Logout</a> </li> 
</ul> 
</div>
</div>

