<?php
require_once '../model/db.php';
require_once '../model/lieuDB.php';
if(isset($_POST['envoyer'])){
    session_start();
    $nom=$_POST['nom'];
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];

    $ok=addLieu($nom,$latitude,$longitude,$_SESSION['id']);
    //header("location:formation?rep=$ok");

}
?>