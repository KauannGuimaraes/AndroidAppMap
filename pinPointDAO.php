<?php require_once 'conection.php' ?>
<?php
    class PinPointDAO extends Conection{
        function insertPinPoint($lat, $lon, $descr, $userId){
            try {
                $pdo = Conection::getInstance();
                $sql = "insert into pinpoint values(?, ?, ?, ?)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $lat);
                $stmt->bindValue(2, $lon);
                $stmt->bindValue(3, $descr);
                $stmt->bindValue(4, $userId);
            } catch (PDOException $erro){
                echo $erro;
            }
        }
        function insertUser($post){
            try{
                $pdo = Conection::getInstance();
                $sql = "insert into mydb.user values(?)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $post->getUserID);
            } catch (PDOException $erro){
                echo $erro;
            }
        }
        function searchUser($post){
            try{
                $pdo = Conection::getInstance();
                $sql = "select iduser from mydb.user where iduser = (?)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $post);
                $stmt-> execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result;
            } catch (PDOException $erro){
                echo $erro;
            }
        }
        function searchPinpoints(){
            try{
                $pdo = Conection::getInstance();
                $sql = "select * from pinpoint";
                $stmt = $pdo->prepare($sql);
                $stmt-> execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            } catch (PDOException $erro){
                echo $erro;
            }
        }
    }
?>