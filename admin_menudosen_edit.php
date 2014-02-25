<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$id_dosen= $_GET['ubah'];

$sql=mysql_query("SELECT * FROM pendaftaran_dosen WHERE id_dosen='$id_dosen'");
while($data=mysql_fetch_array($sql))
{ ?>

<div id=groupmodul1>
<form action="admin_menudosen_edit_proses.php" method="POST">
<table id=tablemodul>
	<tr>
		<th colspan="2">Ubah Data Dosen</th>
	</tr>
    <tr>
    	<td width="50">NIP</td>
        <td width="300">
        <input name="id" type="hidden" value="<?php echo $data["id_dosen"] ?>" />
        <input name="nip" type="text" value="<?php echo $data["nip_dosen"] ?>"/></td>
    </tr>
    <tr>
    	<td>NAMA</td>
        <td><input name="nama" type="text" value="<?php echo $data['nama_dosen']?>" /></td>
   	</tr>
    <tr>
    	<td colspan="2" align="center"><input type="submit" value="submit" /><input type="reset" value="reset" /></td>
    </tr>
    </tr>
</table>
<?php } ?>
</form>
</div>

