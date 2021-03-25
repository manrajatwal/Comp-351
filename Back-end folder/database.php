<?php
//connecting to mySQL database on glowhost web server

$servername='localhost';
$username='manrajat_nodemysql';
$password='nodemysql123';
$dbname = "manrajat_quotes";

$link = mysqli_connect($servername,$username,$password,"$dbname");
$query=mysqli_query($link, "SELECT * FROM quotes");


if($link === false) {
    die("Error: Could not connect." . mysqli_connect_error());
}


?>