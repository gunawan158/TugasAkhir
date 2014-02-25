<div id=groupmodul1>
<table>
<tr><td>
<form action="admin_menumahasiswa.php" method="GET">
<select name='tahun' onchange='this.form.submit()'>
<option value>tahun</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
</select>
<noscript><input type="submit" value="Submit"></noscript>
</form>

</td>
<td>
<form action="admin_menumahasiswa.php" method="GET">
<input name="nama" type="text" />
<input type="submit" value="cari" />
</form>
</td></tr>
</table>
<table id=tablemodul>
	<tr>
		<th colspan="4" width="350">Daftar Mahasiswa</th>
	</tr>
	<tr>
        <th>NIM</th>
        <th>Nama</th>
        <th colspan="2">Aksi</th>
	</tr> 
    
    <?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$nama_mahasiswa= $_GET['nama'];

$sql=mysql_query("SELECT * FROM mahasiswa WHERE nama_mahasiswa LIKE '%$nama_mahasiswa%'");
while($data=mysql_fetch_array($sql))
  { ?>
   <?php include ('admin_menumahasiswa_form.php'); ?>
    <?php } ?>
</table>
</div>