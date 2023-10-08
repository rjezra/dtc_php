<?php
declare(strict_types=1);
if(isset($_POST["nom"]) && isset($_POST["prenom"])){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    strtoupper($nom);
    function getFullName(string $nom, ?string $prenom = "Ravelo"): string
    {  
        if(!empty($nom)){
            preg_match("/([^A-Za-zéèàïäüùç\s])/", $nom, $result);
            if(!empty($result)){
                return "votre nom est icorrect";
            }elseif(!$prenom){
                    return strtoupper($nom);
                }
                return  "Votre nom complet est: $nom  $prenom";
            }else{
                return "Votre nom est vide";
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