<?php require_once 'conection.php' ?>
<?php
    class PinPointDAO extends Conection{
        function insertPinPoint($post){
            try {
                $pdo = Conection::getInstance();
                $sql = "insert into pinpoint values(?, ?, ?, ?)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $post->getLat);
                $stmt->bindValue(2, $post->getLong);
                $stmt->bindValue(3, $post->getDesc);
                $stmt->bindValue(4, $post->getUserID);
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
                $sql = "select userid from mydb.user where userid = (?)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $post->getUserID);
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
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result;
            } catch (PDOException $erro){
                echo $erro;
            }
        }
    }
?>