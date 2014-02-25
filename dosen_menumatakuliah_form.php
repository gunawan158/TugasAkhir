<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

$info=$_GET['inputnilai'];
$minggu=$_GET['minggu'];

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$sql=mysql_query ("SELECT l.nama_makul, k.nama_kelas, m.id_matakuliah
                   FROM makul l, kelas k, matakuliah m
                   WHERE m.id_makul=l.id_makul AND m.id_kelas=k.id_kelas AND m.id_matakuliah=$info" );
while($data=mysql_fetch_array($sql))
{ ?>
<div id=groupmodul1>
    <table>
<tr><th>Pertemuan Minggu ke - <?php echo "$_GET[minggu]"; ?></th></tr>
</table>
<form action="dosen_menumatakuliah_prosesnilai_aturan_form.php" method="post">
<table id=tablemodul>
    <tr align="center">
<th colspan="6"> <?php echo "$data[nama_makul] </br> Kelas $data[nama_kelas]"; ?></th>
	</tr>
<?php } ?>
    	<tr align="center">
        <th>NIM</th>
        <th>NAMA</th>
        <th>KEHADIRAN</th>
        <th>KEAKTIFAN</th>
        <th>TUGAS</th>
        <th>KUIS</th>
        </tr>
<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

$info=$_GET['inputnilai'];
$minggu=$_GET['minggu'];

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$sql=mysql_query ("SELECT mhs.nim_mahasiswa, mhs.nama_mahasiswa, komp.kehadiran, komp.keaktifan, komp.tugas, komp.kuis, komp.project, mhs.id_matakuliah
                   FROM komponen komp, mahasiswa mhs
                   WHERE mhs.id_matakuliah=$info" );
while($nama=mysql_fetch_array($sql))
{ ?>
       	<tr>
        <td><?php echo "$nama[nim_mahasiswa]";?></td>
        <td><?php echo "$nama[nama_mahasiswa]";?></td>
        <td><input name="kehadiran" type="checkbox" value="100"></td>
        <td><input name="keaktifan" type="checkbox" value="100"><input name="jumlah" type="text"></td>
        <td><input name="tugas" type="text"></td>
        <td><input name="kuis" type="text"></td>
        </tr>
<?php } ?>
        <tr>
            <td colspan="6" align="center"><input type="submit" value="simpan" /><input type="reset" value="reset" /></td>
        </tr>
</table>
</form>
</div>