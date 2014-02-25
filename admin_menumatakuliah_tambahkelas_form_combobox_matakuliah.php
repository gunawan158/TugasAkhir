<select name="id_makul" >
<option></option>
<?php 
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");


$sql=mysql_query("SELECT * FROM makul ");
while($data=mysql_fetch_array($sql)) { 
echo "<option value=$data[id_makul]>$data[nama_makul]</option>";
}
?>

</select> 