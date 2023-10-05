<?php
require_once("connexionBd.php");

if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['password'])){
    $name = trim($_POST['name']);
    $password = $_POST['password'];    
}

$sql = 'SELECT `name`, `password` FROM user WHERE `name` = :name';
$query = $db->prepare($sql);
$query->execute([
    'name' => $user
]);

$user = $query->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {

    session_start();
    $_SESSION['name'] = $user['name']; 

    header('location:quizPresentation');
    die();
}
else {
    $errorMessage = "Nom d'utilisateur ou mot de passe incorrect";
}
// if (!headers_sent()) {
//     header('Location: quizPresentation.php');
//     exit;
// }


require_once("connexionBd.php");
$erreur = "";

if (isset($_COOKIE['registered'])) { // si connecté on le renvoie à la page quizPresentation, sinon on affiche la suite
    header('Location: quizPresentation.php');
}

if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['password'])){ // si les champs sont remplis, alors on execute le sql
    $username = trim($_POST['name']);

    $sql = "SELECT `name`, `password` FROM `user` WHERE `name` = :name";
    $query = $db->prepare($sql);
    $query->execute([
        "name" => $username
    ]);

    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($_POST['password'], $user['password'])){ // une fois vérifié, le sql compare si les valeurs sont les mêmes
        $pwd = $_POST['password'];
        $hashedpwd = $user['password'];
        
        // if ($username === "name" && password_verify($_POST['password'], $user['password'])) { 
        //     $cookie_name = "registered";
        //     $cookie_value = $username;

        session_start();
        $_SESSION['name'] = $user['name']; 

            setcookie($cookie_name, $cookie_value, time() + (86400), "/", 'secure', 'httpOnly');// definition de la durée du cookie, ici une journée
            header('Location:component/quizPresentation.php');

        } else if ($username != "name" && password_verify($_POST['password'], $user['password'])) { // et si pas vérifié, on lui indique une erreur            
           
            // $cookie_name = "user";
            // $cookie_value = $username;
            // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            // header('Location:register.php');
        }

    } else {
        $errorMessage = "Nom d'utilisateur ou mot de passe incorrect";
    }
