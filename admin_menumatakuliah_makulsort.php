<table width="50%" id=tablemodul>
	<tr>
		<th colspan="1">Matakuliah</th>
         <th colspan="2">Aksi</th>
	</tr>
<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";
	
$tahun_makul=$_GET['tahun_makul'];
$semester=$_GET['semester'];

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$sql=mysql_query("SELECT DISTINCT l.nama_makul, m.id_matakuliah, m.id_makul
					FROM matakuliah m, makul l, tahun_ajaran t
					WHERE m.id_makul=l.id_makul AND m.id_tahun='$tahun_makul' AND m.semester='$semester'");
while($data=mysql_fetch_array($sql))
{ ?>
    
    <tr>                
        <td><?php echo "<a href=admin_menumatakuliah.php?&makul=$data[id_makul]&tahun=$tahun>$data[nama_makul]</a>"; ?></td>
        <td align="center"><?php echo "<a href=admin_menumatakuliah.php?&ubhmakul=$data[id_matakuliah]> Ubah</a>"; ?></td>
        <td align="center"><?php echo "<a href=admin_menumatakuliah.php?&hpshmakul=$data[id_matakuliah]> hapus</a>"; ?></td>
	</tr> 
    <?php } ?>
</table>
