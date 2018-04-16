<?php
/* Untuk memulai koneksi dengan database db_poliklinik */

$dbName = "poliklinik	";
$conn = mysql_connect("localhost","root","");
if($conn){
echo "";
$db = mysql_select_db("db_poliklinik");
if($db){
echo "";
}else{
echo "Error: <b>" . mysql_error() ."</b><br>";
}
}else{
echo "Error : " . mysql_error() ."<br>";
}
?>