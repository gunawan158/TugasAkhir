<table width="50%" id=tablemodul>
	<tr>
		<th colspan="1">List Kelas</th>
         <th colspan="4">Aksi</th>
	</tr>
    
<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

$semester=$_GET['semester'];
$listmakul=$_GET['pilih_makul'];
$datatahun=$_GET['tahun_makul'];


mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");


$sql=mysql_query("SELECT DISTINCT k.nama_kelas, m.id_matakuliah FROM matakuliah m, kelas k, semester s, tahun_ajaran t where m.id_kelas= k.id_kelas AND m.id_makul='$listmakul' AND m.id_semester='$semester' AND m.id_tahun='$datatahun' ORDER BY nama_kelas ASC" );
while($data=mysql_fetch_array($sql))
{ ?>
    
    <tr>                
        <td><?php echo "<a href=admin_menumatakuliah.php?&infokelas=$data[id_matakuliah]>Kelas  $data[nama_kelas] </a>"; ?></td>
        <td align="center"><?php echo "<a href=admin_menumatakuliah.php?&tmbhmahasiswa=$data[id_matakuliah]> Tambah Mahasiswa</a>"; ?></td>
		<td align="center"><?php echo "<a href=admin_menumatakuliah.php?&lhtnilai=$data[id_matakuliah]> Lihat Nilai</a>"; ?></td>
        <td align="center"><?php echo "<a href=admin_menumatakuliah.php?&ubhkelas=$data[id_matakuliah]> Ubah</a>"; ?></td>
        <td align="center"><?php echo "<a href=admin_menumatakuliah.php?&hpskelas=$data[id_matakuliah]> Hapus</a>"; ?></td>
	</tr> 
    <?php } ?>
</table>
