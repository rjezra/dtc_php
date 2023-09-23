<?php
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];
$enregistre = $_POST["enregistre"];
?>
<form action="./index.php" method="POST">
    <input type="text" name="nom" placeholder="Entre votrr nom">
    <input type="text" name="prenom" placeholder="Entre votrr prenom">
    <input type="text" name="adresse" placeholder="Entre votrr adresse">
    <button type="submit" name = "enregistre">Enregistre</button>
</form>
<h1>Informations</h1>
<p>Nom : <?=$nom?></p>
<p>Prenom : <?=$prenom?></p>
<p>Adresse : <?=$adresse?></p>