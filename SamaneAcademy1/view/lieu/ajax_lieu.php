<?php 
    if(isset($_GET['action']))
    {
        //echo "yes";
        $lieu = array(//le format json
                        "1"=>"DAKAR",
                        "2"=>"FATICK",
                        "3"=>"TAMBA"
        );
        echo json_encode($lieu); // generer un fichier json
    }
?>