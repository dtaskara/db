<?php

	include '../../database/connection.php';
	// $query=sqlsrv_query($conn,"SELECT * FROM Hotel;");
	$res=array();


$query = sqlsrv_query($conn, "SELECT * FROM PackageTour;", $res, array( "Scrollable" => 'static' ));

	if(sqlsrv_num_rows($query)>0){
		while ( $row=sqlsrv_fetch_object( $query )) {
			$res[]=array(
				"id"=>$row->PT_id,
				"ta_id"=>$row->TA_name,
				"trip_id"=>$row->Trip_contact,
				"num_day"=>$row->Num_id,
				"h_id"=>$row->H_id,
				
			)
			;	
		}
	}
	echo json_encode($res);
?>