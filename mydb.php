<?php

$host = 'localhost';
$idPackage = 'root';
$arrivalTime = ' ' ;
$db = 'packagedb';

$con = mysqli_connect($host, $idPackage, $arrivalTime, $pack);
if($con)
	echo 'connected successfully to my database';
	
$sql = "insert into pack (name, address, city, county, description, price, prepaid) values ('Mary' , 'Rosain Oir', 'Limerick', 'Limerick', 'Desktop', 120.99, 'yes')";
$query = mysqli_query($con, $sql); <!-- takes 2 parameter con refers to connection. sql executes the function above $sql -->

if($query)
	echo 'data inserted successfully';
	
?>