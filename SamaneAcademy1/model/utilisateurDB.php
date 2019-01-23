<?php 
    require_once "db.php"; // inclusion de la base de donnée

    function login($email, $password)
    {// permet de rechercher dans la base dans la table utilsateur
        $sql = "SELECT * FROM utilisateur
                WHERE email ='$email'
                AND password = '$password'";

        $db = getConnexion();
        
        $result = $db->query($sql);
        return $result;
    }
    //$r = login('liage@groupeisi.sn', 'passer');
   // var_dump($r->fetch());//permet de deboguer
   //echo $r->rowCount();// permet de veriefier les lignes existant 


?>