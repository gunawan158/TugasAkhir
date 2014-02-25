<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

$info=$_GET['aturanbobot'];

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$sql=mysql_query("SELECT l.nama_makul, k.nama_kelas, m.semester, m.tahun_ajaran, m.id_matakuliah
FROM matakuliah m, kelas k, makul l 
WHERE m.id_kelas= k.id_kelas AND m.id_makul= l.id_makul AND m.id_matakuliah=$info" );

while($data=mysql_fetch_array($sql))

{ ?>

<div id=groupmodul1>
<form action="dosen_menumatakuliah_aturanbobot_form.php" method="post">
<table>
<tr><td width="175"><?php echo "<a href=dosen_menumatakuliah.php?&aturanbobot=$_GET[aturanbobot]>"?>Pengaturan bobot komponen</a></td>
<td width="175"><?php echo "<a href=dosen_menumatakuliah.php?&aturanrange=$_GET[aturanbobot]>"?>Pengaturan range nilai</a></td></tr>
</table>
<table id=tablemodul>
    <tr align="center">
		<th colspan="2" width="350"><?php echo "$data[nama_makul] | $data[nama_kelas] | $data[semester] | $data[tahun_ajaran]"; ?></th>
	</tr>
	<?php } ?>
    	<tr align="center">
        <th>KOMPONEN</th>
        <th>BOBOT</th>
        </tr>
       	<tr>
        <th>KEHADIRAN</th>
        <td><input name="kehadiran" type="text">%</td>
        </tr>
        <th>KEAKTIFAN</th>
        <td><input name="keaktifan" type="text">%</td>
        </tr>
        <tr>
        <th>TUGAS</th>
        <td><input name="tugas" type="text">%</td>
        </tr>
        <tr>
        <th>KUIS</th>
        <td><input name="kuis" type="text">%</td>
        </tr>
        <tr>
        <th>PROJECT</th>
        <td><input name="project" type="text">%</td>
        </tr>
        <tr>
        <th>UTS</th>
        <td><input name="uts" type="text">%</td>
        </tr>
        <tr>
        <th>UAS</th>
        <td><input name="uas" type="text">%</td>
        </tr>
        <td colspan="2" align="center"><input type="submit" value="simpan" /><input type="reset" value="reset" /></td>
        </tr>
</table>
</form>
</div>