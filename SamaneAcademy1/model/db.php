

<?php 
    function getConnexion(){

        $user = "root";
        $password = "";
        $dsn = "mysql:host=localhost;dbname=samaneacademyphpliage";

        try{
            $db = new PDO($dsn, $user, $password);
        }catch(PDOException $ex){
            die($ex->getMessage());
        }

        return $db;
    }

?>