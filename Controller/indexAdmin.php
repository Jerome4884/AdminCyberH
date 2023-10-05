<?=
session_start(); // Must be at the beginning, otherwise the session will not work
ob_start(); // Permet d'enregistré les données dans une mémoire tampon / Stores data in a buffer memory.
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=10">
        <!-- lien bulma -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <!-- bootstrap link -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--Lien style css-->
        <?php echo '<link rel="stylesheet" type="text/css" href="style.css">' ?>
        <link rel="stylesheet" href="style.css">
        <!--Lien script js-->
        <!-- <?php // echo "<script src='index.js'></script>" ?>
        <script>
            let js = "<//?php echo $js; ?>";
            console.log(js);
        </script> -->
        <!--Lien googleFont-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Paytone One">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
        <!--Lien icon fontawesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <title>Accueil</title>
    </head>

    <body style="background-color: #d4cac170; margin-top: -25px">

        <!--partie central-->

        <div class="columns-container is-gapless">
            <div class="columns is-centered is-multiline is-full is-gapless">
                <div class="column is-full is-offset-x">
                    <!-- <figure class="image is-48x48 is-hidden-desktop">
                        <a href="https://www.linkedin.com/company/aegis-civis/" class="navbar-item"><img src="assets/linkedin.png" alt="linkedin"></a>
                    </figure> -->

                    <!-- Creation d'une partie routing, afin de simplifier le code -->
                    <?php
                    // creaion d'une variable routing vide, afin que sa ne plante pas par la suite
                    $routing = '';
                    // pour verifier routing est bien rempli, on s'assure que dans le get routing il y est bien une valeur sinon cela sert a rien
                    if (isset($_GET['routing'])) {
                        $routing = $_GET['routing'];
                    }
                    // Cela permet de charger les composant présent dans le dossier component en fonction de la valeur de routing
                    switch ($routing) {
                        case 'SumPresAdmin':
                            require_once('../Vue/SumPresAdmin.php');
                            break;
                        case 'quizAdmin':
                            require_once('../Vue/quizAdmin.php');
                            break;
                        case 'gestionAdmin':
                            require_once('../Vue/gestionAdmin.php');
                            break;
                        case 'registerAdmin':
                            require_once('../Model/php/registerAdmin.php');
                            break;
                        case 'login':
                            require_once('../Model/php/login.php');
                            break;
                        case 'disconnect':
                            require_once('../Model/php/disconnect.php');
                            break;
                        case 'create':
                            require_once('../Model/create.php');
                            break;    
                        case 'update':
                            require_once('../Model/update.php');
                            break;
                        case 'delete':
                            require_once('../Model/delete.php');
                            break;    
                            // On définit la page par défaut, ici home, quoi que l'utilisateur mzet dans l'url, il sera redirigé sur home
                        default:
                            require_once('../Vue/homeAdmin.php');
                            break;
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>

</html>


