<?php 


if ($_SESSION['status']=="administrator")
{
?>

<table border="1" align="center" width="170">
	<tr>
		<th colspan="2">Menu</th>
	</tr>
    <tr>
    <td colspan="7" align="center" valign="mhurufdle"><a href="admin_menumatakuliah.php?&tmbhmakul=ok"><b>Tambah Matakuliah</b></a> </td>
    </tr>
    <td colspan="7" align="center" valign="mhurufdle"><a href="admin_menumatakuliah.php?&tmbhkelas=ok"><b>Tambah Kelas</b></a> </td>
	</tr>
</table>
<?php } ?>