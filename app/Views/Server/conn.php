<?php

$servername = "localhost";
$username = "id17265780_vishesh1";
$password = "hIxdPIfkE\-F(2@i";
$dbname = "id17265780_vishesh";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn) {

die(" PROBLEM WITH CONNECTION : " . mysqli_connect_error());

}
  
?>