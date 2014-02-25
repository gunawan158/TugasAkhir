<table width="500" id=tablemodul>
	<tr>
		<th colspan="1">Daftar Matakuliah yang Diampu</th>
	</tr>
	<tr>  
	</tr> 
    
    <?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

$listkelas=$_SESSION['id_dosen'];

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$sql=mysql_query("SELECT l.nama_makul, k.nama_kelas, m.id_matakuliah FROM matakuliah m, kelas k, makul l where m.id_kelas= k.id_kelas AND m.id_makul= l.id_makul AND m.id_dosen=$listkelas ORDER BY nama_kelas ASC" );
while($data=mysql_fetch_array($sql))
{ ?>
    
    <tr>                
        <td><?php echo "<a href=dosen_menumatakuliah.php?&prosesnilai=$data[id_matakuliah]> $data[nama_makul] | $data[nama_kelas] </a>"; ?></td>
	</tr> 
    <?php } ?>
</table>
