<?=require_once('../Controller/indexAdmin.php') ?>

<body style="background-color: #d4cac170; margin-top: -25px">

<header>
    <!--Navigation-->
        <nav class="navbar " role="navigation" aria-label="main navigation" style="background-color: #d4cac170; max-height:130px">
            <div class="navbar-brand">
                <div class="columns is-centered">
                    <div class="column">
                    <figure class="image is-128x128 ml-3 logo">
                        <a href="https://www.aegis-civis.com"><img src="../assets/LOGO AEGIS.png" alt="logo"></a>
                    </figure>
                    </div>
                    <div class="column">
                <a role="button" class="navbar-burger is-align-self-flex-end is-align-self-center " aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
                </div>
                </div>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start ml-6">
                    <a class="navbar-item" type="button" style="text-decoration: none; color: #29478B;" a href="?routing=homeAdmin" >
                    Accueil
                    </a>

                    <a class="navbar-item" type="button" style="text-decoration: none; color: #29478B;" href="?routing=gestionAdmin">
                    Gestion
                    </a>

                    <a class="navbar-item" type="button" style="text-decoration: none; color: #29478B;" href="?routing=SumPresAdmin">
                    Présentation
                    </a>

                    <a class="navbar-item" type="button" style="text-decoration: none; color: #29478B;" href="?routing=quizAdmin">
                    Quiz
                    </a>


                </div>

                <div class="navbar-end mr-4">
                    <div class="navbar-item">
                        <div class="buttons is-rounded is-small">
                        <!-- Si connecte, affiche btn deco, sinon affiche btn co -->
                        <?php
                             if(!isset($_SESSION['name'])) { 
                                echo "<a class='button is-rounded is-small' href='?routing=login' style='background-color: #29478B; color: white; text-decoration: none;'>
                                        Se connecter
                                      </a>";
                                } 
                             else {
                            echo "<a class='button is-light is-rounded is-small' href='?routing=disconnect' style='text-decoration: none;'>
                                Se deconnecter
                            </a>";
                            echo "<br>" ."Bonjour" . " "  . ($_SESSION['name']);
                            }
                        ?>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
</header>

<script>
    //burger menu
    // Script for burger menu
    document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Add a click event on each of them
$navbarBurgers.forEach( el => {
  el.addEventListener('click', () => {

    // Get the target from the "data-target" attribute
    const target = el.dataset.target;
    const $target = document.getElementById(target);

    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
    el.classList.toggle('is-active');
    $target.classList.toggle('is-active');

  });
});

});
</script>