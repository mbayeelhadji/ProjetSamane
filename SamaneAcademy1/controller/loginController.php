<?php
require_once "../model/db.php";
require_once "../model/utilisateurDB.php";
if (isset($_POST['email']) && isset($_POST['pass']))
{
    $email = htmlentities($_POST['email']);
    $password = htmlentities($_POST['pass']);

    $result = login($email, $password);

    if($result->rowCount() !=0)
    {
        session_start();
        $user = $result->fetch();
        $_SESSION['id'] = $user[0];
        $_SESSION['nom'] = $user[1];
        $_SESSION['prenom'] = $user[2];
        header("location:accueil");
    }else{
        header("location:login?error=yes");
    }

    if(isset($_GET['logout'])){
        session_start();
        session_unset();
        session_destroy();
        $_SESSION['nom']= "";
        header("location:login");
    }

}
//$r = login('liage@groupeisi.sn', 'passer');
//var_dump($r->fetch());




?>