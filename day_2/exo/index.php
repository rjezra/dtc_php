<?php
@$nom = $_POST["nom"];
@$prenom = $_POST["prenom"];
@$adresse = $_POST["adresse"];
@$enregistre = $_POST["enregistre"];
?>
<form action="./index.php" method="POST">
    <input type="text" name="nom" placeholder="Entre votre nom">
    <input type="text" name="prenom" placeholder="Entre votre prenom">
    <input type="text" name="adresse" placeholder="Entre votre adresse">
    <button type="submit" name = "enregistre">Enregistre</button>
</form>
<h1>Informations</h1>
<?php
if(isset($nom) && isset($prenom) && isset($adresse)){
    echo "<p>Nom :" .$nom. "</p>";
    echo "<p>Prenom :" .$prenom. "</p>";
    echo "<p>Adresse :" .$adresse. "</p>";
}
 ?>