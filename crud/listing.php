<?php
$connexion = mysqli_connect("localhost", "root", "", "dtc");
if (!$connexion) {
    die("Impossible de se connecter");
}

if (isset($_POST['suprime'])) {
    $nom = mysqli_real_escape_string($connexion, $_POST['nom']); // Sanitize user input
    $sql2 = "DELETE FROM php WHERE nom = '$nom'";
    if (mysqli_query($connexion, $sql2)) {
        echo "Supprimer ok";
    } else {
        echo "Erreur lors de la suppression de l'enregistrement : " . mysqli_error($connexion);
    }
}

$sql = "SELECT * FROM php";
$result = mysqli_query($connexion, $sql);
?>

<h1>Liste de utilisateur:</h1>
<table border="1" bordercolor="blue" width="40%">
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Age</th>
        <th>Telephone</th>
        <th>Adresse</th>
        <th>Action</th>
    </tr>
    <?php while ($ligne = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $ligne["nom"]; ?></td>
            <td><?php echo $ligne["prenom"]; ?></td>
            <td><?php echo $ligne["age"]; ?></td>
            <td><?php echo $ligne["telephone"]; ?></td>
            <td><?php echo $ligne["adresse"]; ?></td>
            <td>
                <form method="post" action="">
                    <input type="hidden" name="nom" value="<?php echo $ligne['nom']; ?>">
                    <button type="submit" name="suprime">supprimer</button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>