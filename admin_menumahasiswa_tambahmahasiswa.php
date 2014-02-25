<div id=groupmodul1>
<form action="admin_menumahasiswa_tambahmahasiswa_proses.php" method="post">
<table id=tablemodul>
	<tr>
		<th colspan="2">Tambah Mahasiswa</th>
	</tr>
    <tr>
    	<td width="75">NIM</td>
        <td width="200"><input name="nim_mahasiswa" type="text" /></td>
    </tr>
    <tr>
    	<td width="75">Nama</td>
        <td width="200"><input name="nama_mahasiswa" type="text" /></td>
    </tr>
    <tr>
    	<td width="75">Angkatan</td>
        <td width="200"><?php include ('admin_menumahasiswa_combobox_angkatan.php'); ?> </td>
    </tr>
    <tr>
    	<td colspan="2" align="center"><input type="submit" value="submit" /></td>
    </tr>
    </tr>
</table>
</form>
</div>

