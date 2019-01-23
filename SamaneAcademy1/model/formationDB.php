<?php 
    require_once "db.php"; // inclusion de la base de donnée

    function addFormation($nom, $dateDebut,$duree,$idL,$idU)
    {
        $sql = "INSERT INTO formation 
        VALUES (NULL, '$nom', '$dateDebut',$duree,$idL,$idU)";
        $connexion = getConnection();
        return $connexion->exec($sql);
    }
    
    function updateFormation($nom, $dateDebut,$duree,$idL,$idU)
    {
        $sql = "UPDATE formation 
        SET nom = '$nom', dateDebut='$dateDebut', duree=$duree, idL=$idL, idU= $idU";
        WHERE id = $id
        $connexion = getConnection();
        return $connexion->exec($sql);
    }

    
    function deleteFormation($id)
    {
        $sql = "DELETE formation  WHERE id = $id";
        $connexion = getConnection();
        return $connexion->exec($sql);
    }


?>