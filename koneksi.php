<?php

$host="192.168.10.10";
$user="user";
$password="h1lm1#MONGGO";
$db="crud";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>