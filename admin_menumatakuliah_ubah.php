<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$ubahmakul=$_GET['ubhmakul'];

$sql=mysql_query("SELECT * FROM makul WHERE id_makul='$ubahmakul'");
while($data=mysql_fetch_array($sql))
{ ?>

<form action="admin_menumatakuliah_ubah_proses.php" method="post">
<table id=tablemodul>
	<tr>
		<th colspan width="200">Ubah Matakuliah</th>
	</tr>
    <tr>
    	
        <td>
        <input name="id" type="hidden" value="<?php echo $data["id_makul"] ?>" />
        <input name="makul" type="text" value="<?php echo $data["nama_makul"] ?>" /></td>
    <tr>
        <td colspan align="center"><input type="submit" value="submit" /></td>
    </tr>
    </tr>
</table>
<?php } ?>
</form>