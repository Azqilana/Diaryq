<?php
$host = "localhost:3306";
$username = 'root';
$password ='azqilana';
$database ='anggota';

$dbc = mysqli_connect($host,$username,$password,$database);

if ($dbc) {
	echo "";
} else {
	echo "sorry belum nyambung";
}

?>