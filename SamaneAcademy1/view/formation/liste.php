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
    <title>Formation</title>
    <link rel="stylesheet" type="text/css"  href="public/css/bootstrap.min.css" />
    <script type="text/javascript" src="public/js/jquery.js"></script>
    <script type="text/javascript" src="public/js/jquery-ui.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        //alert("ok");
        /*$("#lieu").append("<option value='1'>DAKAR</option>");
        $("#lieu").append("<option value='2'>FATICK</option>");
        $("#lieu").append("<option value='3'>TAMBA</option>");*/
        
        $.ajax({
            url:"http://127.0.0.1/mesprojets/SamaneAcademy/ajax-lieu?action=liste",
            type:"get",
            dataType:"json",
            success:function(json){
                $.each(json, function(index, value){
                //alert(value);
                    $("#lieu").append("<option value='"+index+"'>"+value+"</option>");
                    $("#r_lieu").append("<option value='"+index+"'>"+value+"</option>");
                });
            }
        });
        $("#r_lieu").change("on", function(){//pour charger les infos
            var $lieu =  $("#r_lieu").val();
            alert($lieu);
        });
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
    <!-- formulaire de recherche-->
    <form class="form-inline">
        <div class="form-group mx-ms-3">
            <p class="form-control-static">Rechercher</p>
            <select class=form-control name="r_lieu" id="r_lieu">
                <option value="">Choississez un lieu de formation</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualiser</button>
    </form>

    <div class= "col-md-6" style="margin-top:15px;">
        <div class = "panel panel-primary">
            <div class = "panel-heading">liste des formations</div>
                <div class = "panel-body">
                    <table class = "table">
                      <tr>
                        <td>Identifiant </td>
                        <td>Nom </td>
                        <td>Date de debut </td>
                        <td>Durée </td>
                        <td>Lieu de Formation </td>
                     </tr>
                
                    </table>
                </div>
            </div>
        </div>
        <div class = "col-md-6" style="margin-top:15px;">
            <div class = "panel panel-primary">
                <div class = "panel-heading">Formulaires de gestion des formations </div>
                    <div class = "panel-body">
                        <form action="formationController" method= "POST">
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
                                    <label class = "control-label" for="dateDebut">Date de debut</label>
                                    <input class = "form-control" type="date" name = "dateDebut" id = "dateDebut"/>
                                </div>
                                <div class = "form-group">
                                    <label class = "control-label" for="duree">Durée</label>
                                    <input class = "form-control" type="number" name = "duree" id = "duree"/>
                                </div>
                                <div class = "form-group">
                                    <label class = "control-label" for="lieu">Lieu de formations</label>
                                    <select class = "form-control"  name = "lieu" id = "lieu">
                                    <option value=""> Faites votre choix </option>
                                    </select>
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