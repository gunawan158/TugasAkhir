<div id=groupmodul1>
<table id=tablemodul>
<form action="admin_menudosen.php" method="GET">
	<tr><input value=<?php echo "$_GET[dosen]"; ?> type="text" name="dosen" /><input value="cari" type="submit"  /></tr>
</form>
	<tr>
		<th colspan="4" width="350">Daftar Dosen</th>
	</tr>
	<tr>
        <th>NIP</th>
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

$nama_dosen= $_GET['dosen'];

$sql=mysql_query ("SELECT * FROM pendaftaran_dosen WHERE nama_dosen LIKE '%$nama_dosen%'");
while($data=mysql_fetch_array($sql))
{ ?>
    
    <tr align="center">                
        <td><?php echo "$data[nip_dosen]"; ?></td>
        <td><?php echo "$data[nama_dosen]"; ?></td>
        <td><?php echo "<a href=admin_menudosen.php?&ubah=$data[id_dosen]>"; ?>Ubah</a></td>
        <td><?php echo "<a href=admin_menudosen.php?&hapus=$data[id_dosen]>"; ?>Hapus</a></td>
	</tr> 
    <?php } ?>
</table>
</div>