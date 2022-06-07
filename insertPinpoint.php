<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
//$result = 0;
//
$pinPointDAO = new PinPointDAO;
if(!empty($_POST['lat']) && !empty($_POST['lon']) && !empty($_POST['descr']) && !empty($_POST['userId'])) {
    // New Data Input
    $lat = $_POST['lat'];
    $lon = $_POST['lon'];
    $descr = $_POST['descr'];
    $userId = $_POST['userId'];
    
    $pinPointDAO->insertPinPoint($lat, $lon, $descr, $userId);
} else {
    $result = 'failed';
}
http_response_code(200);
echo json_encode($result);
?>