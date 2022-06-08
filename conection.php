<?php
    abstract class Conection {
            public static function getInstance(){
                try {
                    //$pdo = new PDO("mysql:host=localhost;dbname=mydb","root", "");
                    $pdo = new PDO("mysql:host=appdatabase.mysql.database.azure.com;dbname=mydb","usuario", "Projecao2022");
                    return $pdo;
                } catch (Exception $erro) {
                    echo $erro->getMessage();
                }
            }
        }
?>