<?php
declare(strict_types=1);
if(isset($_POST["nom"]) && isset($_POST["prenom"])){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    strtoupper($nom);
    function getFullName(string $nom, ?string $prenom): string
    {  
        if(!empty($nom) && !preg_match("/^[A-Za-zÀ-ÿ][\s\t]$/", $nom) && ctype_alpha($nom)){
            return  "Votre nom complet est: $nom  $prenom";
        }else{
            return "Votre Nom invalide";  
        }
    }
    echo getFullName($_POST["nom"], $_POST["prenom"]);
}
?>
<form action="./index.php" method="POST">
    <input type="text" name="nom"  placeholder="Entre votre nom" >
    <input type="text" name="prenom"  placeholder="Entre votre prenom">
    <button type="submit" name="enregistre">enregistre</button>
</form>