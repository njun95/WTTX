<?php 
$nameDB = "wttxdb";
$userName = "root";
$hostName = "localhost";
$password = "";
$connect = mysqli_connect($hostName, $userName, $password, $nameDB);
if($connect)
{
	//successful connection echo "DB connection was successful";
	
}
else
{
	echo "SORRY, CAN'T CONNECT TO DATABASE!!! Try again";
}
?>