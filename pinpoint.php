<?php require_once 'user.php' ?>
<?php
    class Pinpoint extends User{
        private $logitude;
        private $latitude;
        private $description;

        function getLong(){
            return $this->longitude;
        }
        function getLat(){
            return $this->latitude;
        }
        function getDesc(){
            return $this->description;
        }

        function setLong($long){
            $this->longitude = $long;
        }
        function setLat($lat){
            $this->latitude = $lat;
        }
        function setDesc($desc){
            $this->description = $desc;
        }
    }
?>