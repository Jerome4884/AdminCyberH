<?php
// Page pour la modification des articles
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

$admin = 1;
// verifie si c'est les admin qui se connecte
if ($contents['admin'] === "0" || !isset($_SESSION['name'])) { 
    header('Location: ?routing=login');
}
// Recupere le numero envoyé dans url, on declare $id pour lui assigner la valeur et 
//pour afficher le contenu associé
$id = isset($_GET['id']);

// si id inf ou= à 0 
if ($id <= 0) {
    header('Location: ?routing=login');
}   else {
        // foreach ($ids as $id) {
            $presentation_id = $id;

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
        }
    // }
?>

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
