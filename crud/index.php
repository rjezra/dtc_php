<?php

declare(strict_types=1);
$connexion = mysqli_connect("localhost", "root", "", "dtc");
if (!$connexion) {
    die("Impossible de se connecter");
}

function isNameValid(string $name): bool
{
    $pattern = "/^[a-zA-ZÀ-ÿ.-]+[\s\t]*[a-zA-ZÀ-ÿ.-]*$/";
    return preg_match($pattern, $name) === 1;
}
function isAgeValid($age): bool
{
    $pattern1 = "/^[0-9]{1,3}$/";
    return preg_match($pattern1, $age) === 1;
}
function isPhoneValid(string $phone):bool
{
    $regex = "/^\+\d{3}\s\d{2}\s\d{3}\s\d{2}$/";
    return preg_match($regex, $phone) == 1;
}

if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["age"]) && isset($_POST["phone"]) && isset($_POST["adresse"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $ages = $_POST["age"];
    $phones = $_POST["phone"];
    $adresse = $_POST["adresse"];
    if (isNameValid($nom) && isNameValid($prenom) && isAgeValid($ages) && isPhoneValid($phones)) {
        $sql = sprintf('INSERT INTO php (nom, prenom, age, telephone, adresse) VALUES("%s", "%s", %d, "%s", "%s")', $nom, $prenom, $ages, $phones, $adresse);
        mysqli_query($connexion, $sql);
        header('Location: listing.php');
        echo "Enresistre ok";
    } else {
        echo "Vérifiez votre nom, prénom, age, telephone";
    }
}
?>

<h1>Formulaire d'Insertion</h1>
<form action="index.php" method="POST">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom"><br>

    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom"><br>

    <label for="age">Âge:</label>
    <input type="number" id="age" name="age"><br>

    <label for="phone">Téléphone:</label>
    <input type="tel" id="phone" name="phone"><br>

    <label for="adresse">Adresse:</label>
    <input type="text" id="adresse" name="adresse"><br>

    <input type="submit" value="Envoyer">
</form>
</form>