<?php

include '../../database/connection.php';
$res=array();

$query = sqlsrv_query($conn, "SELECT * FROM City;", $res, array( "Scrollable" => 'static' ));

if(sqlsrv_num_rows($query)>0){
    while ( $row=sqlsrv_fetch_object( $query )) {
        $res[]=array(
            "id"=>$row->City_id,
            "country_id"=>$row->Country_name,
            "name"=>$row->City_name,

        )
        ;
    }
}
echo json_encode($res);
?>
