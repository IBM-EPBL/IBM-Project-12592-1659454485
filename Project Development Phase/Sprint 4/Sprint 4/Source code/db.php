<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "loginsystem";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
