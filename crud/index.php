<?php

declare(strict_types=1);

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
    return preg_match($regex, $phone);
}

if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["age"]) && isset($_POST["phone"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $ages = $_POST["age"];
    $phones = $_POST["phone"];


    if (isNameValid($nom) && isNameValid($prenom) && isAgeValid($ages) && isPhoneValid($phones)) {
        echo "Validation ok";
    } else {
        echo "Vérifiez votre nom et prénom";
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