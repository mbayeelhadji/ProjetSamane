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
    <title>Lieux</title>
    <link rel="stylesheet" type="text/css"  href="public/css/bootstrap.min.css" />
    <script type="text/javascript" src="public/js/jquery.js"></script>
    <script type="text/javascript" src="public/js/jquery-ui.js"></script>
    <script type="text/javascript">
    $(document).ready(function name(params){
        alert("ok");
    });
        
    
    </script>
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
    <div class= "col-md-6">
        <div class = "panel panel-primary">
            <div class = "panel-heading">liste des Lieux</div>
                <div class = "panel-body">
                    <table class = "table">
                      <tr>
                        <td>Identifiant </td>
                        <td>Nom </td>
                        <td>Laltitude </td>
                        <td>Longitude </td>
                
                     </tr>
                
                    </table>
                </div>
            </div>
        </div>
        <div class = "col-md-6">
            <div class = "panel panel-primary">
                <div class = "panel-heading">Formulaires de gestion des lieux </div>
                    <div class = "panel-body">
                        <form action="lieuController" method= "POST">
                            <div class = "form-group">
                                <div class = "form-group">
                                    <label class = "control-label" for="id">Identifiant</label>
                                    <input class = "form-control" type="number" name = "id" id = "id"/>
                                </div>
                                <div class = "form-group">
                                    <label class = "control-label" for="nom">Nom</label>
                                    <input class = "form-control" type="text" name = "nom" id = "nom"/>
                                </div>
                                <div class = "form-group">
                                    <label class = "control-label" for="laltitude">Laltitude</label>
                                    <input class = "form-control" type="text" name = "laltitude" id = "laltitude"/>
                                </div>
                                <div class = "form-group">
                                    <label class = "control-label" for="longitude">Longitude</label>
                                    <input class = "form-control" type="text" name = "longitude" id = "longitude"/>
                                </div>
                            
                                <div class = "form-group">
                                    <input class = "btn btn-success" type="submit" name="envoyer" value = "ENVOYER">
                                    <input class = "btn btn-danger"type="reset" name = "annuler" value = "Annuler">
                                </div>
                            </div>
                
                
                         </form>
            
                    </div>
                 </div>
             </div>      
        </div>
    </div>
    
</body>
</html>