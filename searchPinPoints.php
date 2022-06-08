<?php require_once 'pinPointDAO.php' ?>
<?php 
    $api = new PinPointDAO;
    header('Content-Type: application/json');
    $result = $api->searchPinpoints();
    echo json_encode(array("pin"=>$result));
?>