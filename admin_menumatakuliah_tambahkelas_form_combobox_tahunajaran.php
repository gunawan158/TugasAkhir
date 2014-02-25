<select name="tahun_ajaran">
<option></option>
<?php 
date_default_timezone_set("Asia/Jakarta");
$tahun=date("Y");
$tahun1=date("Y")+1;

$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$sql=mysql_query("SELECT * FROM tahun_ajaran ");
while($data=mysql_fetch_array($sql)) 
{ 
echo "<option value=$data[id_tahun]>$data[tahun]</option>";
}
?>
</select> 