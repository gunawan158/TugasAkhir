<table width="40%">
	<tr>
		<th width="20%">Info Kelas</th>
         <th width="80%">Data</th>
	</tr>
    
<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

$datakelas=$_GET['infokelas'];

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$sql=mysql_query("SELECT l.nama_makul, k.nama_kelas, d.nama_dosen, s.periode_semester, t.tahun
				FROM makul l, kelas k, pendaftaran_dosen d, semester s, tahun_ajaran t, matakuliah m 
				WHERE m.id_makul=l.id_makul AND m.id_kelas=k.id_kelas AND m.id_dosen=d.id_dosen AND m.id_semester=s.id_semester AND m.id_tahun=t.id_tahun AND m.id_matakuliah=$datakelas");
while($data=mysql_fetch_array($sql))
{ ?>
    <tr>                
        <th>Matakuliah</th>
        <td><?php echo "$data[nama_makul]"; ?></td>
    </tr>
    <tr>
    	<th>Kelas</th>
        <td><?php echo "$data[nama_kelas]"; ?></td>
    </tr> 
    <tr>
    	<th>Dosen</th>
        <td><?php echo "$data[nama_dosen]"; ?></td>
    </tr>
    <tr>
    	<th>Semester</th>
        <td><?php echo "$data[periode_semester]"; ?></td>
    </tr>
    <tr>
        <th>Tahun Ajaran</th>
        <td><?php echo "$data[tahun]"; ?></td>
	</tr> 
    <?php } ?>
</table>
