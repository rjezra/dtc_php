<?php


echo "<br>POST: ";
var_dump($_POST);
//echo "bonjour " . $_GET["name"]." ". $_GET["lastname"];
?>
<form action="./formulaire.php" method="POST">
    <input type="text" name="nom" placeholder="Entre votre nom">
    <input type="text" name="tel" placeholder="Entre votre tel">
    <input type="text" name="cin" placeholder="Entre votre cin">
    <button type="submit">Enregistre</button>
</form>