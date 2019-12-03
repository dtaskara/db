<?php

if(isset($_POST['name']) && isset($_GET['id'])) {

    echo $_POST['name'];
//    include '../../database/connection.php';
//    $res = array();

//    $query = sqlsrv_query($conn, "SELECT * FROM Hotel;", $res, array("Scrollable" => 'static'));
//
//    if (sqlsrv_num_rows($query) > 0) {
//        while ($row = sqlsrv_fetch_object($query)) {
//            $res[] = array(
//                "id" => $row->H_id,
//                "name" => $row->H_name,
//                "contact" => $row->H_contact,
//                "city_id" => $row->City_id,
//                "price" => $row->H_price,
//                "stars" => $row->H_stars
//            );
//        }
//    }
}
//echo json_encode($res);
