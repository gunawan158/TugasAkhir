<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

$info=$_GET['aturanrange'];

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$sql=mysql_query("SELECT l.nama_makul, k.nama_kelas, m.id_matakuliah, m.semester, m.tahun_ajaran 
FROM matakuliah m, kelas k, makul l
WHERE m.id_kelas= k.id_kelas AND m.id_makul= l.id_makul AND m.id_matakuliah=$info" );

while($data=mysql_fetch_array($sql))

{ ?>

<div id=groupmodul1>
<form action="dosen_menumatakuliah_aturanrange_form.php" method="post">
<table>
<tr><td width="175"><?php echo "<a href=dosen_menumatakuliah.php?&aturanbobot=$_GET[aturanrange]>"?>Pengaturan bobot komponen</a></td>
<td width="175"><?php echo "<a href=dosen_menumatakuliah.php?&aturanrange=$_GET[aturanrange]>"?>Pengaturan range nilai</a></td></tr>
</table>
<table id=tablemodul>
    <tr align="center">
		<th colspan="4" width="400"><?php echo "$data[nama_makul] | $data[nama_kelas] | $data[semester] | $data[tahun_ajaran] </br> RANGE NILAI"; ?></th>
	</tr>
	<?php } ?>
    	
       	<tr>
        <th>A</th>
        <td><input name="kehadiran" type="text"></td>
        <th>C+</th>
        <td><input name="tugas" type="text"></td>
        </tr>
        <tr>
        <th>A-</th>
        <td><input name="tugas" type="text"></td>
        <th>C</th>
        <td><input name="uas" type="text"></td>
        </tr>
        <tr>
        <th>A/B</th>
        <td><input name="kuis" type="text"></td>
        <th>C-</th>
        <td><input name="uas" type="text"></td>
        </tr>
        <tr>
        <th>B+</th>
        <td><input name="project" type="text"></td>
        <th>C/D</th>
        <td><input name="uas" type="text"></td>
        </tr>
        <tr>
        <th>B</th>
        <td><input name="uts" type="text"></td>
        <th>D+</th>
        <td><input name="uas" type="text"></td>
        </tr>
        <tr>
        <th>B-</th>
        <td><input name="uas" type="text"></td>
        <th>D</th>
        <td><input name="uas" type="text"></td>
        </tr>
        <tr>
        <th>B/C</th>
        <td><input name="uas" type="text"></td>
        <th>E</th>
        <td><input name="uas" type="text"></td>
        </tr>
        <tr>
            <td colspan="4" align="center"><input type="submit" value="simpan" /><input type="reset" value="reset" /></td>
        </tr>
</table>
</form>
</div>