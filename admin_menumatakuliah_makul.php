<table width="550" id=tablemodul>
	<tr>
		<th colspan="1">Matakuliah</th>
         <th colspan="2">Aksi</th>
	</tr>
<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$sql=mysql_query("SELECT nama_makul, id_makul FROM makul" );
while($data=mysql_fetch_array($sql))
{ ?>
    
    <tr>                
        <td><?php echo "<a href=admin_menumatakuliah.php?&makul=$data[id_makul]&tahun=$tahun/$tahun1>$data[nama_makul]</a>"; ?></td>
        <td align="center"><?php echo "<a href=admin_menumatakuliah.php?&ubhmakul=$data[id_makul]> Ubah</a>"; ?></td>
        <td align="center"><?php echo "<a href=admin_menumatakuliah.php?&hpsmakul=$data[id_makul]> hapus</a>"; ?></td>
	</tr> 
    <?php } ?>
</table>
