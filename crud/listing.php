<?php
$connexion = mysqli_connect("localhost", "root", "", "dtc");

if (!$connexion) {
    die("Impossible de se connecter à la base de données");
}

if (isset($_POST["supprime"])) {
    $nom = mysqli_real_escape_string($connexion, $_POST['nom']);
    $sql2 = "DELETE FROM php WHERE nom = '$nom'";
    mysqli_query($connexion, $sql2);
}

if (isset($_POST["modifier"])) {
    $id = $_POST["id"]; // Assurez-vous que $id est correctement défini
    header('Location: update.php?id=' . $id);
    exit();
}

$sql = "SELECT * FROM php";
$result = mysqli_query($connexion, $sql);
?>

<h1>Liste des utilisateurs :</h1>
<table border="1" bordercolor="blue" width="50%">
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
                    <input type="hidden" name="id" value="<?php echo $ligne['id']; ?>">
                    <button type="submit" name="supprime">Supprimer</button>
                    <button type="submit" name="modifier">Modifier</button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>