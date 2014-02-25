<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$id_mahasiswa=$_GET['ubah'];

$sql=mysql_query("SELECT * FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa'");
$data=mysql_fetch_array($sql);


{ ?>

<div id=groupmodul1>
<form action="admin_menumahasiswa_edit_proses.php" method="post">
<table id=tablemodul>
	<tr>
		<th colspan="2">Tambah Mahasiswa</th>
	</tr>
    <tr>
    	<td width="75">NIM</td>
        <td width="200">
        <input name="id" type="hidden" value="<?php echo $data["id_mahasiswa"] ?>" />
        <input name="nim" type="text" value="<?php echo $data["nim_mahasiswa"] ?>" /></td>
    </tr>
    <tr>
    	<td width="75">Nama</td>
        <td width="200"><input name="nama" type="text" value="<?php echo $data["nama_mahasiswa"] ?>" /></td>
    </tr>
    <tr>
		<td width="75">Angkatan</td>
        <td width="200">
        
            	<select name="pilih_makul">
<option></option>
<?php
$sql1=mysql_query("SELECT * FROM angkatan ORDER BY tahun_angkatan DESC" );
while($data1 = mysql_fetch_array($sql1))
{
if($data1['id_angkatan'] == $data['id_angkatan'])
{
	$selected = 'selected';
}
else
{
	$selected = '';
}

echo "<option ".$selected." value={$data1[id_angkatan]}> {$data1[tahun_angkatan]}</option>"; }?>
</select>
        </td>

    </tr>
    <tr>
    	<td colspan="2" align="center"><input type="submit" value="submit" /></td>
    </tr>
    </tr>
</table>
<?php } ?>

