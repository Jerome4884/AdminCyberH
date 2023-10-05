<?php

require_once("php/connexionBd.php");
require_once("php/cookie.php");
include_once('../Vue/navAdmin.php');

if (!isset($_SESSION['name'])) {
    // Rediriger vers la page de connexion ou autre page appropriée
    header('Location: ?routing=login');
    exit();
}
$id = $_POST['user_id'];
/* requete pour récupérer les informations d'un client */
$sql = "SELECT * FROM cyberharcelement.`user` WHERE `user_id` = :id;";
$query = $db->prepare($sql);
$query->execute([
    'id' => $id
]);

$user = $query->fetch(PDO::FETCH_ASSOC);

// requete pour supprimer un user

$sqlDelete = "DELETE FROM cyberharcelement.`user` WHERE `user_id` = :id";
$queryDelete = $db->prepare($sqlDelete);
$queryDelete->execute([
    'id' => $id
]);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression</title>
</head>
<body>

    <section>
        <h1>Suppression d'utilisateur</h1>
        <h2><?= $user['name']?></h2>
            <p>
                <?= $user['city']; ?><br>
                <?= $user['zip']; ?>
            </p>
            <?= $user['email']; ?>

            <form method="POST">
                <input type="hidden" name="id" value="<?= $user['user_id']; ?>" >
                <input type="submit" name="submit" value="Supprimer">
            </form>

    </section>
    <section>
    <!-- <h1>Suppression</h1>
        <h2><?= $variable['']?></h2>
            <p>
                <?= $user['']; ?><br>
                <?= $user['']; ?>
            </p>
            <?= $user['']; ?>

            <form method="POST">
                <input type="hidden" name="id" value="<?= $user['_id']; ?>" >
                <input type="submit" name="submit" value="Supprimer">
            </form> -->
    </section>


</body>
</html>