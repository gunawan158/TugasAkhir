<form action="dosen_menumatakuliah.php" method="GET">
<table border="1" align="center">
        <tr>
		<th colspan="7">MASUKAN TAHUN AJARAN DAN SEMESTER</th>
	</tr>
	<tr>
        <td>
<select name="tahun">
<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$sql=mysql_query("SELECT DISTINCT tahun_ajaran FROM matakuliah ORDER BY tahun_ajaran DESC");
while($data=mysql_fetch_array($sql))
  { ?>

<option value=<?php echo"$data[tahun_ajaran]"?>> <?php echo "$data[tahun_ajaran]" ?></option>

<?php } ?>
</select>

<br />
<input type="radio" name="semester" value="ganjil" />Ganjil<br />
<input type="radio" name="semester" value="genap" />Genap<br />
<input type="hidden" value=<?php echo "$_SESSION[id_dosen]" ?> name="dosen" />
<input type="submit" value="SUBMIT" />
</tr>
</table>
</form>
