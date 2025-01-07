<?php
if(!session_id())
    session_start();

require_once '../app/BddConnect.php';
require_once '../app/MariaDBUserRepository.php';
require_once '../app/Authentification.php';

require_once 'header.php';

$bdd = new BddConnect();

$pdo = $bdd->connexion();
$trousseau = new MariaDBUserRepository($pdo);
$auth = new Authentification($trousseau);

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        $retour = $auth->register($_POST['email'], $_POST['nom'], $_POST['prenom'], $_POST['password'], $_POST['repassword']);
        $message = "Vous êtes desormais enregistré";
        $texte = "<div>Vous pouvez vous authentifier</div>";
        $lien = "<a href='connexion.php'>Se connecter</a>";
    }
    catch(Exception $e) {
        $retour = false;
        $message = "Enregistrement impossible";
        $texte = $e->getMessage();
        $texte = "<div>$texte</div>";
        $lien = "<a href='inscription.php'>Retour</a>";
    }
    echo "<main><h1>$message</h1><div class='container'><div class='info'>$texte$lien</div></div></main>";
}

require_once 'footer.php';