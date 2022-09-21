<?php

$servername = "localhost";
$username = "id19596233_panelmod";
$password = "ZBOit!+i6TRr2v8-";
$dbname = "id19596233_panel";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn) {

die(" PROBLEM WITH CONNECTION : " . mysqli_connect_error());

}
  
?>