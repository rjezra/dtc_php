<?php
$connexion = mysqli_connect("localhost", "root", "", "dtc");

if (!$connexion) {
    die("Impossible de se connecter à la base de données");
}

if (isset($_POST["modifier"])) {
    $id = $_POST["id"];
    $nom = mysqli_real_escape_string($connexion, $_POST['nom']);
    $prenom = mysqli_real_escape_string($connexion, $_POST['prenom']);

    // Mettre à jour les données dans la base de données
    $sql = "UPDATE php SET nom='$nom', prenom='$prenom' WHERE id='$id'";
    if (mysqli_query($connexion, $sql)) {
        header('Location: listing.php');
        echo "Enregistrement mis à jour avec succès";
    } else {
        echo "Erreur lors de la mise à jour de l'enregistrement.";
    }
}
?>
