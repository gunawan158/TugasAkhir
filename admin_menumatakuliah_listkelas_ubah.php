<form action="admin_menumatakuliah_ubah_proses.php" method="post">
<table id=tablemodul>
	<tr>
		<th colspan="2">Ubah Kelas</th>
	</tr>
    <tr>
    	<td width="75">Matakuliah</td>
        <td width="200"><?php include ('admin_menumatakuliah_listkelas_ubah_combobox_matakuliah.php'); ?>
        </td>
    </tr> 
    <tr>
    	<td width="75">Kelas</td>
        <td width="200"><?php include ('admin_menumatakuliah_listkelas_ubah_combobox_kelas.php'); ?></td>
    </tr>
    <tr>
    	<td width="75">Dosen</td>
        <td width="200"><?php include ('admin_menumatakuliah_listkelas_ubah_combobox_dosen.php'); ?></td>
    </tr>
    <tr>
    	<td width="75">Semester</td>
        <td width="200"><?php include ('admin_menumatakuliah_listkelas_ubah_combobox_semester.php'); ?></td>
    </tr>  
    <tr>
    	<td width="75">Tahun Ajaran</td>
        <td width="200"><?php include ('admin_menumatakuliah_listkelas_ubah_combobox_tahunajaran.php'); ?></td>
    </tr>  
    <tr>
    	<td colspan="2" align="center"><input type="submit" value="submit" /></td>
    </tr>
    </tr>
</table>
</form>