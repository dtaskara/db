<?php
// Dina : DESKTOP-DFCGBU5
// Aknur: LAPTOP-8GC05N0A\SQLEXPRESS

$servername = "DESKTOP-DFCGBU5";
$connectionInfo = array("Database" => "Project");
$conn = sqlsrv_connect($servername, $connectionInfo);

if (!$conn) {
    echo "Connection could not be established. <br/>";
    die(print_r(sqlsrv_errors(), true));
}

?>
