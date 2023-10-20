<?php

declare(strict_types=1);

$connexion = mysqli_connect("localhost", "root", "", "dtc");
if (!$connexion) {
    die("Impossible de se connecter");
}
    function isNameValid(string $name):bool
    {
        return !empty($name) && !preg_match("/^[a-zA-ZÀ-ÿ.-]*[a-zA-ZÀ-ÿ][\s\t]+[a-zA-ZÀ-ÿ.-]*$/", str_replace(' ', '', $name));
    }
    function getFullName(string $nom, ?string $prenom): string {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        // Valide le nom et le prénom.
        if (isNameValid($nom) && isNameValid($prenom)) {
            return "Votre nom complet est : $nom $prenom";

        } else {
            return "Votre nom ou prénom est invalide. Assurez-vous de ne pas utiliser de chiffres ou de caractères spéciaux.";
        }
    }
    echo getFullName($_POST["nom"], $_POST["prenom"]);
  
?>
<form action="./index.php" method="POST">
    <input type="text" name="nom" placeholder="Entre votre nom">
    <input type="text" name="prenom" placeholder="Entre votre prenom">
    Age<input type="number" name="age">
    <input type="text" name="telephone" placeholder="Entre votre Telephone">
    <input type="text" name="adresse" placeholder="Entre votre Adresse">
    <button type="submit" name="enregistre">enregistre</button>
</form>