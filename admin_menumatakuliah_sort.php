<table width="100%" id=tablemodul>
<tr>
<td align="center">
<table>
    <tr>
    <td align="center"><a href="admin_menumatakuliah.php?&tmbhmakul=ok">Tambah Matakuliah</a></td>
    <td align="center"><a href="admin_menumatakuliah.php?&tmbhkelas=ok">Tambah Kelas</a> </td>
	</tr>
</table>
<form action="admin_menumatakuliah.php" method="GET">
<select name="pilih_makul">
<option></option>
<?php
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$sql=mysql_query("SELECT * FROM makul ORDER BY nama_makul ASC" );
while($data1 = mysql_fetch_array($sql))
{
if($data1['id_makul'] == $_GET['pilih_makul'])
{
	$selected = 'selected';
}
else
{
	$selected = '';
}
echo "<option ".$selected." value={$data1['id_makul']}> {$data1['nama_makul']}</option>";} ?>
</select>


<select name="tahun_makul">
<option></option>
<?php
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$sql=mysql_query("SELECT * FROM tahun_ajaran ORDER BY tahun DESC" );
while($data2 = mysql_fetch_array($sql))
{
if($data2['id_tahun'] == $_GET['tahun_makul'])
{
	$selected = 'selected';
}
else
{
	$selected = '';
}
echo "<option ".$selected." value={$data2['id_tahun']}> {$data2['tahun']}</option>";} ?>
</select>

<?php
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$sql=mysql_query("SELECT * FROM semester ORDER BY periode_semester ASC" );
while($data3 = mysql_fetch_array($sql))
{
if($data3['id_semester'] == $_GET['semester'])
{
	$checked = 'checked';
}
else 
{
	$checked = '';
}
echo "<input ".$checked." type=radio name='semester' value=$data3[id_semester] /> $data3[periode_semester]"; } ?>
<input type="submit" value="cari" /> 
</form>

</td>
</tr>