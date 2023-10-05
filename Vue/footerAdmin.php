<?=require_once('../Controller/indexAdmin.php')?>

 <!--footer-->
    <footer class="footer is-flex is-align-items-center is-justify-content-center" id="foter"><!-- style="background-color: #B2BCCF; height: 20px;"-->
        <div style="margin-top: 0; padding-top:1px; display: flex; flex-direction: column; justify-content:center; align-items: center;">
            <figure class="image is-128x128 ml-3 logo">
                <a href="."><img src="../assets/LOGO AEGIS.png" alt="logo"></a>
            </figure>
            <h6 class="subtitle has-text-centered">© 2023 </h6>
            <h6 class="subtitle has-text-centered is-block-mobile" id="contentFoot">
                <strong>Le cyber-harcelement </strong> par Aegis-Civis. <br>Tous droit réservé
            </h6>
            <div class="bulle">
                <p class="subtitle has-text-centered is-5 info" id="text">
                    Passé votre souris dessus pour voir ce qui s'y cache
                </p>
            </div>
        </div>
    </footer>

    <script>
    // Footer
    let info = document.getElementsByClassName("info")[0];
    let bulle = document.getElementsByClassName("bulle")[0];
    info.addEventListener("mouseenter", () => {
        info.innerHTML = "Ce site a été réalisé au cours d'un stage chez Aegis-Civis groupe par Jérôme, un stagiaire en formation de développeur web et web mobile, donc débutant. Si le site présente des bugs, des imperfections ou autres problèmes, la faute incombe uniquement à Jérôme. Merci de votre compréhension.";
    });
    //     info.addEventListener("mouseleave", () => {
    //     bulle.innerHTML = "Passé votre souris dessus pour voir ce qui s'y cache";
    // });
    </script>