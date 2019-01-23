<?php 
    session_start();
    if($_SESSION['nom'] == ""){
        header("location:login");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Framework SamaneMVC</title>
    <meta name="author" content="aizentk8@gmail.com">
    <link rel="stylesheet" type="text/css" media="screen" href="public/css/bootstrap.min.css"/>
</head>
<body>
    <div class="nav navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="formations">Gestion des formations</a></li>
            <li><a href="lieux">Gestion des lieux</a></li>
            <li><a href="map-lieu-formation">Geolocalisation des lieux de formations</a></li>
            <li><a href="loginController?logout=yes">Deconnexion</a></li>
            <li>
                <a href="#">
                    <?php 
                        
                        echo "<div style='color:green;font-size:16px;'> 
                            Bienvenue : ".$_SESSION['prenom'].
                              "  ".$_SESSION['nom']."

                        </div>";
                    ?>
                </a>
            </li>
        </ul>
    </div>
</body>
</html>