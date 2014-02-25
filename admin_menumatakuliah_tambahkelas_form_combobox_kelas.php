<select name="id_kelas">
<option></option>
<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$sql=mysql_query("SELECT * FROM kelas ");
while($data=mysql_fetch_array($sql)) { 
echo "<option value=$data[id_kelas]>$data[nama_kelas]</option>";
}
?>
</select> 