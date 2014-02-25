<table>
<tr>
	<td>
    <form action="admin_menumatakuliah.php" method="GET">
	<select name='tahun' onchange='this.form.submit()'>	
    
	<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$sql=mysql_query("SELECT DISTINCT nim_mahasiswa FROM mahasiswa WHERE nim_mahasiswa");
while($data=mysql_fetch_array($sql))
  { ?>
  
	<option  <?php echo "value=$data[nim_mahasiswa] > $data[nim_mahasiswa]" ?></option>
	</select>
    <?php } ?>
	<noscript><input type="submit" value="Submit"></noscript>
	</form>
	</td>
	<td>
<form action="admin_menumatakuliah.php" method="GET">
<input name="nama" type="text" />
<input type="submit" value="cari" />
</form>
</td>
</tr>
</table>
<form action="admin_menumatakuliah_tambahmahasiswa_proses.php" method="post">
<table id=tablemodul>
	<tr>
		<th colspan="4" width="350">Daftar Mahasiswa</th>
	</tr>
	<tr>
    	<th>Pilih</th>
        <th>Nim</th>
        <th>Nama</th>
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
     <tr align="center">
     	<?php echo "<input type=hidden value=$_GET[tmbhmahasiswa]>" ?>
     	<td><input name="pilih" type="checkbox" <?php echo "value=$data[id_mahasiswa]"?>;></td>      
        <td><?php echo "$data[nim_mahasiswa]"; ?></td>
        <td><?php echo "$data[nama_mahasiswa]"; ?></td>
        <?php } ?>
     <tr align="center">
     	<td colspan="3"><input type="submit" value="kirim"></td>
     </tr>
</tr> 
</table>
</form>