<?php 

$servername="LAPTOP-8GC05N0A\SQLEXPRESS";
$connectionInfo=array("Database" => "Project");
$conn=sqlsrv_connect($servername, $connectionInfo);

if($conn){
	echo "Connection established. <br/>";
}
else{
	echo "Connection could not be established. <br/>";
	die(print_r(sqlsrv_errors(), true));
}


 ?>