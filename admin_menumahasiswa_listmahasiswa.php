<div id=groupmodul1>
<table>
<tr>
	<td>
	<form action="admin_menumahasiswa.php" method="GET">
	<select name='tahun' onchange='this.form.submit()'>
    <option>Pilih Tahun Angkatan</option>
	<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$sql=mysql_query("SELECT * FROM angkatan ORDER BY tahun_angkatan DESC");
while($data=mysql_fetch_array($sql))
  { ?>

<option value=<?php echo"$data[id_angkatan]"?>> <?php echo "$data[tahun_angkatan]" ?></option>

<?php } ?>
</select>
	</select>
	<noscript><input type="submit" value="Submit"></noscript>
	</form>
	</td>
	<td>
<form action="admin_menumahasiswa.php" method="GET">
<input name="nama" type="text" />
<input type="submit" value="cari" />
</form>
	</td>
</tr>
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

$sql=mysql_query("SELECT * FROM mahasiswa WHERE nim_mahasiswa");
while($data=mysql_fetch_array($sql))
  { ?>
     <?php include ('admin_menumahasiswa_form.php'); ?>
    <?php } ?>
</table>
</div>