<select name="id_dosen">
<option></option>
<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");


$sql=mysql_query("SELECT * FROM pendaftaran_dosen ");
while($data=mysql_fetch_array($sql)) { 
echo "<option value=$data[id_dosen]>$data[nama_dosen]</option>";
}
?>

</select> 