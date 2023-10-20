<?php
$connexion = mysqli_connect("localhost", "root", "", "dtc");

if (!$connexion) {
    die("Impossible de se connecter à la base de données");
}

// Récupérer l'ID de l'URL
$id = $_GET["id"];

$sql = "SELECT * FROM php WHERE id = '$id'";
$result = mysqli_query($connexion, $sql);
$ligne = mysqli_fetch_assoc($result);
?>
<h1>Modifier l'utilisateur :</h1>
<form method="post" action="update_process.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" value="<?php echo $ligne['nom']; ?>"><br>
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" value="<?php echo $ligne['prenom']; ?>"><br>
    <label for="adresse">Adresse :</label>
    <input type="text" name="adresse" value="<?php echo $ligne['adresse']; ?>"><br>
    <button type="submit" name="modifier">Modifier</button>
</form>
