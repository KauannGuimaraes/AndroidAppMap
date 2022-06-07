<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
if(!empty($_POST['pinId']) ) {
    // New Data Input
    $pin = $_POST['pinId']
} else {
    $result = 'failed';
}
http_response_code(200);
echo json_encode($result);
?>