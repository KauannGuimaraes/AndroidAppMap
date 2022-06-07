<?php 
class User {
    private $userId;

    function getUserId(){
        return $this->userId;
    }
    function setUserId($id){
        $this->userId = $id;
    }
}
?>