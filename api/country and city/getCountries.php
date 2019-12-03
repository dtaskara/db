<?php

include '../../database/connection.php';
$res=array();

$query = sqlsrv_query($conn, "SELECT * FROM Country;", $res, array( "Scrollable" => 'static' ));

if(sqlsrv_num_rows($query)>0){
    while ( $row=sqlsrv_fetch_object( $query )) {
        $res[]=array(
            "id"=>$row->Country_id,
            "name"=>$row->Country_name,
        );
    }
}
echo json_encode($res);
?>
