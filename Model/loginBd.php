<?php
session_start();

// Vérifier si les données du formulaire ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $ville = $_POST["ville"];
    $codePostal = $_POST["code_postal"];

    // Connexion à la base de données
    require_once("./connexionBd.php");

    // Préparation la requête insertion des données
    $sql = "INSERT INTO utilisateurs (nom, email, ville, code_postal) VALUES ('$nom', '$email', '$ville', '$codePostal')";

    // Exécuter la requête d'insertion
    if ($conn->query($sql) === TRUE) {
        header("Location: enregistrement_succes.php");
        exit();
    } else {
        echo "Une erreur c'est produite : " . $conn->error;
    }

    // Fermer la connexion 
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Le Quiz par Aegis-Civis</title>

        <!--Lien cdn framework bulma-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <link rel="stylesheet" href="https://www.npmjs.com/package/bulma-checkradio">
        <!--Lien style css-->
        <link rel="stylesheet" href="/Applications/MAMP/htdocs/Projet-web-cyberharcelement/hero/style.css">
        <!--Lien script js-->
        <script src="/Applications/MAMP/htdocs/Projet-web-cyberharcelement/header/index.js"></script>
        <script src="/Applications/MAMP/htdocs/Projet-web-cyberharcelement/quiz/script.js"></script>
        <!--Lien googleFont-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Paytone One">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
        <!--Lien icon fontawesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!--Ancre-->
        <link rel="stylesheet" href="quizPrésentation.html">
    </head>
<body>
    <form action="enregistrer_utilisateur.php" method="post">
    <div class="field">
        <label class="label">Nom</label>
        <div class="control">
            <input class="input" type="text" placeholder="Nom" name="nom">
        </div>
    </div>
    <div class="field">
        <label class="label">Email</label>
        <div class="control">
            <input class="input" type="text" placeholder="Email" name="email">
        </div>
    </div>
    <div class="field">
        <label class="label">Ville</label>
        <div class="control">
            <input class="input" type="text" placeholder="Ville" name="ville">
        </div>
    </div>
    <div class="field">
        <label class="label">Code postal</label>
        <div class="control">
            <input class="input" type="text" placeholder="Code postal" name="code_postal">
        </div>
    </div>
    <div class="field">
        <div class="control">
            <button class="button is-primary" type="submit">Enregistrer</button>
        </div>
    </div>
</form>
</body>