<?php

include '../../database/connection.php';
$city = null;
$name=null;
$star=null;
$text=null;

$query = "";



if  (isset($_POST['name']) && strlen($_POST['name'])>0)   {
    $name = $_POST['name'];
    if(strlen($query)>0){
        $query = $query ." and ";
    }
    $query = $query . " h_name='" .$name . "' ";
}
if  (isset($_POST['city']) && strlen($_POST['city'])>0)   {
    $city = $_POST['city'];
    if(strlen($query)>0){
        $query = $query ." and ";
    }
    $query = $query . " city_id='" .$city . "' ";
}
if  (isset($_POST['star']) && strlen($_POST['star'])>0)   {
    $star = $_POST['star'];
    if(strlen($query)>0){
        $query = $query ." and ";
    }
    $query = $query . " H_stars=" .$star . " ";
}
if  (isset($_POST['searchText']) && strlen($_POST['searchText'])>0)   {
    $text = $_POST['searchText'];
    if(strlen($query)>0){
        $query = $query ." and ";
    }
    $query = $query . " ( h_name like '%" .$text . "%'  )";
}
echo $query;
$res = array();


$query1 = sqlsrv_query($conn, "SELECT * FROM Hotel where ".$query, $res, array("Scrollable" => 'static'));

if (sqlsrv_num_rows($query1) > 0) {
    while ($row = sqlsrv_fetch_object($query1)) {
        $res[] = array(
            "id" => $row->h_id,
            "name" => $row->h_name,
            "contact" => $row->h_contact,
            "city_id" => $row->city_id,
            "price" => $row->h_price,
            "stars" => $row->H_stars
        );
    }
}
echo json_encode($res);
?>
