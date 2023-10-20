<?php
if(isset($_POST["nombre1"]) && isset($_POST["nombre2"]) && isset($_POST["operateur"]) ){
    $nombre1 = $_POST["nombre1"];
    $nombre2 = $_POST["nombre2"];
    $operateur = $_POST["operateur"];
    function calculator(string $nombre1, string $nombre2, string $operateur)
    {
        if(is_numeric($nombre1) && is_numeric($nombre2) && preg_match("/[\+\-\*\/]/", $operateur)){
            $nombre1 = floatval($nombre1);
            $nombre2 = floatval($nombre2);
            switch($operateur) {
                case '+':
                    return $nombre1 + $nombre2;
                case '-':
                    return $nombre1 - $nombre2;
                case '*':
                    return $nombre1 * $nombre2;
                case '/':
                    if($nombre2 != 0) {
                        return $nombre1 / $nombre2;
                    } else {
                        return "Division par zéro non autorisée";
                    }
                default:
                    return "Opérateur non valide";
            }
        } else {
            return "Opération non valide";
        }
    }
        echo calculator($nombre1, $nombre2, $operateur);
}
?>
<form action="./index.php" method="POST">
    <input type="text" name="nombre1" placeholder="Entre votre nombre 1">
    <input type="text" name="operateur"  placeholder="Entre votre operateur +-*/">
    <input type="text" name="nombre2" placeholder="Entre votre nombre 2">
    <button type="submit" name="enregistre">Valider</button>
</form>

