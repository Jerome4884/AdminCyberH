<?php
// Page pour la modification des articles et du quiz(des quizs à l'avenir)
// modif articles/presentation

error_reporting(E_ALL);

// verifie si une session est bien ouverte
if (!isset($_SESSION['name'])) {
    // Rediriger vers la page de connexion ou autre page appropriée si c'est pas le cas
    header('Location: ?routing=login');
    exit();
}

require_once("php/connexionBd.php");
require_once("php/cookie.php");
// include_once("../Controller/indexAdmin.php");
$admin = 1;
// verifie si c'est les admin qui se connecte
if ($contents['admin'] === "0" || !isset($_SESSION['name'])) { 
    header('Location: ?routing=login');
}

// Récup de l'ID depuis l'URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
// Vérif de l'ID
if ($id <= 0) {
    foreach ($ids as $id) {
    }
    die("id invalide"); // si pas valide, on die.

global $articles, $titres;

$titres = '';
$articles = '';
// $article = $_POST['article'];
$error = '';
$presentation_id = $id;

// requete pour recuperer les titres
$sqlTitre = "SELECT `titre` FROM cyberharcelement.`presentation` 
            WHERE `presentation_id` = :presentation_id"; 
$queryTitre = $db->prepare($sqlTitre);
$queryTitre->execute([
     ":presentation_id" => $presentation_id
]);
$titres = $queryTitre->fetch(PDO::FETCH_ASSOC);
var_dump($titres);

//requete pour recuperer les articles
$sqlA = "SELECT `article` FROM cyberharcelement.`presentation` 
         WHERE `presentation_id` = :presentation_id;"; 
$queryA = $db->prepare($sqlA);
$queryA->execute([
    "presentation_id" => $presentation_id,
]);
$articles = $queryA->fetch(PDO::FETCH_ASSOC);
var_dump($articles);



// $titre = htmlentities(trim($_POST['titre']));
// $text = htmlentities(trim($_POST['text']));
// $error = '';

//Vérifie si le submit à été envoyé et si les champs titre et text ne sont pas vides
if ((isset($_POST['submit'])) && (empty($_POST['titre'])) || (empty($_POST['article']))) {
    echo 'Veuillez renseigner les champs. ' ;

// var_dump($_POST['titre']);
// var_dump($_POST['text']);

    // if(!isset($_POST['submit']) && !empty($_POST['titre']) && !empty($_POST['text'])){
    //     $titre = ($_POST['titre']);
    //     $text = ($_POST['text']);
    // }
    
    // ensuite on modifie les données existantes
    $sqlAdd = "UPDATE cyberharcelement.`presentation` SET titre = :titre, article = :article
            WHERE presentation_id = :id"; // apres le VALUES ne pas entouré les valeurs/parametre par des ``ou autre guillemets
    $queryAdd = $db->prepare($sqlAdd);
    $queryAdd->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR);
    $queryAdd->bindValue(':article', $_POST['article'], PDO::PARAM_STR);
    $queryAdd->bindValue(':id', $id, PDO::PARAM_INT);
    $queryAdd->execute(
        // ":titre" => $_POST['titre'],
        // ":article" => $_POST['article']
    );
    var_dump($_POST);
    var_dump($titres);
    var_dump($articles);

    // $user = $query->fetch(PDO::FETCH_ASSOC);

// $sqlDate = " ALTER TABLE cyberharcelement.`presentation`
//              ADD DateModif TIMESTAMP";
// $queryD = $db->prepare($sqlDate);
// $queryD->execute();
//     echo 'Colonne ajoutée';
          
} else {
    $error = 'Une erreur est survenue';
}
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editeur</title>
</head>
<body>

    <section class="section is-medium">
        <?= include_once('../Vue/navAdmin.php'); ?>
            <div class="container is-centered">
                <div class="columns is-centered">
                    <div class="column is-half is-centered">
                        <form action="" method="POST">
                            <div class="field">
                                <label class="label" for="titre">Nouveau titre</label>
                                    <div class="control">
                                        <input id="titre" type="text" name="titre" placeholder="Titre" value="<?= $titres['titre']; ?>" size="30">
                                    </div>
                            </div>
                            <!-- <div class="field">
                                <div class="control">
                                    <input type="hidden" name="id" value="<?= $articles['presentation_id']; ?>" size="30">
                                </div>
                            </div> -->
                            <div class="field">
                                <label class="label" for="description">Nouvelle description</label>
                                    <div class="control">
                                        <textarea id="description" type="textarea" name="article" placeholder="Texte" rows="5" cols="33"><?= $articles['article']; ?></textarea>
                                    </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="submit" name="submit" value="Editer">
                                </div>
                                <?= var_dump($_POST) ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?= include_once('../Vue/footerAdmin.php'); ?>
    </section>
</body>
</html>