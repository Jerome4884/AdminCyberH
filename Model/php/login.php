<?php
// Si une session est déjà ouverte, on envoie l'utilisateur à la page quizPresentation
if (isset($_SESSION['name'])) {

    header("Location: ?routing=quizPresentation"); 
    exit;
}
// necessaire pour effectuer les actions qui vont suivre
require_once("connexionBd.php");

// vérification si les champs ne sont pas vide
if (!empty($_POST['name']) && !empty($_POST['password'])) {
    $name = htmlspecialchars(trim($_POST['name']));// evite les caracteres spéciaux, afin d'éviter les failles xss
    $password = $_POST['password'];

// Requete pour vérifier si le name et le pwd existe dans la bdd
    $sql = 'SELECT `name`, `password` FROM user WHERE `name` = :name';
    $query = $db->prepare($sql);
    $query->execute([
        'name' => $name
    ]);
// Récuperation sous forme d'un tableau associatif
    $user = $query->fetch(PDO::FETCH_ASSOC); 

// Si les infos sont vérifiés alors on envoie l'utilisateur à la page quizPresentation
    if ($user && password_verify($password, $user['password'])) {

// démarrage d'une session propre à l'utilisateur afin de garder ses infos de connection 
// dans le navigateur pendant un temps déterminé
        session_start();
        $_SESSION['name'] = $user['name']; 
        header('location:?routing=quizPresentation');
        exit();
        
// Si info pas correct, ou pas présente alors on redirige l'utilisateur sur la page register        
    } else {
        $notCo = ('veuillez vous enregistrer');
        header('Location: ?routing=register');
    }
}       
    
// } else {
//         $errorMessage = sprintf("Nom d'utilisateur ou mot de passe incorrect");
//         // echo "<p> Nom d'utilisateur ou mot de passe incorrect</p>";

//     }

?>
<section class="section is-medium" style="background-image: url(Assets/background2.jpg); background-size: cover; height: 100%;">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-half mb-6">
                <h1 class="title is-3 has-text-centered" id="titre" style="color: white;"><u>Connectez vous ici</u></h1>

                <!-- Ajouter lien pour go sur page register si pas enregistré -->
                <form action="" method="post" id="formLog">
                    <div class="field">
                        <label class="label" >Nom d'utilisateur</label>
                            <p class="control has-icons-left">
                            <!-- <div class="control"> -->
                                <input class="input" type="text" placeholder="Nom d'utilisateur" name="name">
                                    <span class="icon is-small is-left">
                                        <i class="fa-solid fa-user"></i>
                                    </span>
                            <!-- </div> -->
                            </p>
                    </div>
                    <div class="field">
                        <label class="label" >Mot de passe</label>
                            <p class="control has-icons-left">
                            <!-- <div class="control"> -->
                                <input class="input" type="password" name="password" id="password" placeholder="Mot de passe">
                                    <span class="icon is-small is-left">
                                        <i class="fa-solid fa-lock"></i>
                                    </span>
                            <!-- </div> -->
                            </p>
                    </div>
                    <div class="field mt-3">
                        <div class="control">
                            <input class="button is-rounded" type="submit" placeholder="se connecter" style="background-color: #d4cac170; color: white; text-decoration: none;">
                        </div>
                            <!--<?php if ($notCo)?>-->
                            <!-- <p><?php echo($notCo)?><a href="Location: ?routing=register">ici</a></p> -->
                        
                    </div>
                </form>
                <!-- <div class="is-flex is-justify-content-center is-align-items-center mt-6 " style="background-color: #d4cac170;border-radius: 10vh"> -->
                    <h1 class="title is-3 has-text-centered mt-6 " id="titre"><a href="?routing=register">Ou enregistré-vous en cliquant ici</a></h1>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<script>
    function resetLog() {
        document.getElementById("formLog").reset();
    }
</script>

</html>