<?php

$servername="localhost";
$dbname="userdetail";
$username="flexjobs";
$password="BskOrEPCdmmnJ9vm";

//create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Connection not Established".mysqli_connect_error());
}
?>