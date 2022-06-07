<?php 
    $api = new PinPointDAO;
    header('Content-Type: application/json');
    echo $api->searchPinpoints();
?>