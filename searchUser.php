<?php require_once 'pinPointDAO.php' ?>
<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    $pinpointDAO = new PinPointDAO;
    if(!empty($_GET['search'])) {
        $id = $_GET['search'];
        $result = $pinpointDAO->searchUser($id);
        if($result == TRUE){
            $result = array('id'=> $id, 'status' => 'sucess');
        } 
    } else {
        $result = array('status' => 'failed');
    }
    http_response_code(200);
    echo json_encode($result, JSON_FORCE_OBJECT)
?>