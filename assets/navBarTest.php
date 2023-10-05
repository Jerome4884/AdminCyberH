<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- lien bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <!--Lien style css-->
    <?php echo '<link rel="stylesheet" type="text/css" href="style.css">' ?>
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
<body>
    <header>
        <section class="hero is-fullwidth-with-navbar ">
            <!--Navigation-->
            <div class="hero-head"id="navBar" ><!--style="background-color: #d4cac170;"-->
                <div class="columns is-mobile is-marginless">
                    <!--Logo-->
                    <div class="column left" id="logo">
                        <figure class="image is-128x128">
                        <a href="https://www.aegis-civis.com"><img src="assets/LOGO AEGIS.png" alt="logo"></a>
                        </figure>
                            <!--Menu burger visible en dessous de 1000px, a vérifier!-->
                            <a role="button" class="navbar-burger" id="burger" aria-label="menu" aria-expanded="false">
                                <!--pour le nbre de barre, généralement 3-->
                                <span aria-hidden="true"></span>
                                <span aria-hidden="true"></span>
                                <span aria-hidden="true"></span>
                            </a> 
                    </div>
                
                    <!--Elements du menu-->
                    <div class="column center desktop">
                        <!-- <div class="navbar-start "> -->
                            <div class="navbar-item"> 
                                <!-- <div class="button is-small is-responsive is-rounded"> -->
                                    <!-- <button class="button is-rounded" style="border: none;">--><a class="navbar-item" href="." style="text-decoration: none; color: #29478B;">Accueil</a><!--</button> -->
                                    <!--On passe une variable de type get dans la requette http + nom de la valeur ou on veut aller-->
                                    <!-- <button class="button" style="border: none;">--><a class="navbar-item" href="?routing=sommairePresentation" style="text-decoration: none; color: #29478B;">Présentation</a> <!--</button> -->
                                    <!-- <button class="button" style="border: none;">--><a class="navbar-item" href="?routing=quizPresentation" style="text-decoration: none; color: #29478B;">Quiz</a><!--</button> -->
                                    <!-- <button class="button" style="border: none;">--><a class="navbar-item" href="?routing=aPropos" style="text-decoration: none; color: #29478B;">A propos</a><!--</button> -->
                                    <!-- <button class="button" style="border: none;">--><a class="navbar-item" href="?routing=contact" style="text-decoration: none; color: #29478B;">Contact</a><!--</button> -->
                                <!-- </div> -->
                            </div>
                        <!-- </div> -->
                    </div>
                        <!-- <div class="navbar is-mobile"> -->
                        <div class="colums right" id="social">
                            <p class="navbar-item"><small>suivez-nous sur les réseaux</small></p>
                            <a href="https://www.linkedin.com/company/aegis-civis/" class="navbar-item"><img src="assets/linkedin.png" alt="linkedin"></a>
                        </div>
                        <!-- <div class="navbar-end">
                            <nav class="breadcrumb mt-6 pr-3" aria-label="breadcrumbs" style="display: flex; flex-direction: row; align-items: right;">
                                <button class="button is-rounded"><a href="?routing=login" style="text-decoration: none; color: #29478B;">Se connecter</a></button>
                                <button class="button is-rounded"><a href="?routing=disconnect" style="text-decoration: none; color: #29478B;">Se deconnecter</a></button>
                            </nav>
                        </div> -->
                        <!-- </div> -->

                    </div>

                </div>
            </div>
        </section>
    </header>
