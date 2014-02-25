<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

$info=$_GET['prosesnilai'];

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$sql=mysql_query ("SELECT l.nama_makul, k.nama_kelas, m.id_matakuliah
                   FROM makul l, kelas k, matakuliah m
                   WHERE m.id_makul=l.id_makul AND m.id_kelas=k.id_kelas AND m.id_matakuliah=$info" );

while($data=mysql_fetch_array($sql))

{ ?>


<table>

    <tr align="center">
		<th colspan="2" width="500"><?php echo "$data[nama_makul] </br> Kelas $data[nama_kelas]"; ?></th>
	</tr>
	<?php } ?>
    	<tr align="center">
        <td><?php echo "<a href=dosen_menumatakuliah.php?&minggu=1&inputnilai=$_GET[prosesnilai]>"; ?>Pertemuan Minggu ke - 1</a></td>
        <td><?php echo "<a href=dosen_menumatakuliah.php?&minggu=8&inputnilai=$_GET[prosesnilai]>"; ?>Pertemuan Minggu ke - 8</a></td>
        <tr align="center">
        <td><?php echo "<a href=dosen_menumatakuliah.php?&minggu=2&inputnilai=$_GET[prosesnilai]>"; ?>Pertemuan Minggu ke - 2</a></td>
        <td><?php echo "<a href=dosen_menumatakuliah.php?&minggu=9&inputnilai=$_GET[prosesnilai]>"; ?>Pertemuan Minggu ke - 9</a></td>
        </tr>
        <tr align="center">
        <td><?php echo "<a href=dosen_menumatakuliah.php?&minggu=3&inputnilai=$_GET[prosesnilai]>"; ?>Pertemuan Minggu ke - 3</a></td>
        <td><?php echo "<a href=dosen_menumatakuliah.php?&minggu=10&inputnilai=$_GET[prosesnilai]>"; ?>Pertemuan Minggu ke - 10</a></td>
        </tr>
        <tr align="center">
        <td><?php echo "<a href=dosen_menumatakuliah.php?&minggu=4&inputnilai=$_GET[prosesnilai]>"; ?>Pertemuan Minggu ke - 4</a></td>
        <td><?php echo "<a href=dosen_menumatakuliah.php?&minggu=11&inputnilai=$_GET[prosesnilai]>"; ?>Pertemuan Minggu ke - 11</a></td>
        </tr>
        <tr align="center">
        <td><?php echo "<a href=dosen_menumatakuliah.php?&minggu=5&inputnilai=$_GET[prosesnilai]>"; ?> Pertemuan Minggu ke - 5</a></td>
        <td><?php echo "<a href=dosen_menumatakuliah.php?&minggu=12&inputnilai=$_GET[prosesnilai]>"; ?>Pertemuan Minggu ke - 12</a></td>
        </tr>
        <tr align="center">
        <td><?php echo "<a href=dosen_menumatakuliah.php?&minggu=6&inputnilai=$_GET[prosesnilai]>"; ?>Pertemuan Minggu ke - 6</a></td>
        <td><?php echo "<a href=dosen_menumatakuliah.php?&minggu=13&inputnilai=$_GET[prosesnilai]>"; ?>Pertemuan Minggu ke - 13</a></td>
        </tr>
        <tr align="center">
        <td><?php echo "<a href=dosen_menumatakuliah.php?&minggu=7&inputnilai=$_GET[prosesnilai]>"; ?>Pertemuan Minggu ke - 7</a></td>
        <td><?php echo "<a href=dosen_menumatakuliah.php?&minggu=14&inputnilai=$_GET[prosesnilai]>"; ?>Pertemuan Minggu ke - 14</a></td>
        </tr>
        <tr align="center">
        <td><?php echo "<a href=dosen_menumatakuliah.php?&minggu=15&inputnilai=$_GET[prosesnilai]>"; ?>UTS</a></td>
        <td><?php echo "<a href=dosen_menumatakuliah.php?&minggu=16&inputnilai=$_GET[prosesnilai]>"; ?>UAS</a></td>
        </tr>
        </tr>
        <tr align="center">
        <td colspan="2"><?php echo "<a href=dosen_menumatakuliah.php?&minggu=17&inputnilai=$_GET[prosesnilai]>"; ?>Total Nilai</a></td>
        </tr>
</table>