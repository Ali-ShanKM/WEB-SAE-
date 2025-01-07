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
        $retour = $auth->authenticate($_POST['email'], $_POST['password']);
        $message = "Authentification réussie";

        $_SESSION['email'] = $_POST['email'];

        if($_POST['email'] === "admin@soshepatites.org") {
            $texte = "<div>Bienvenue sur l'espace administrateur</div>";
            $lien = "<a href='admin.php'>Acceder aux indicateurs</a>";
        } else {
            $texte = "";
            $lien = "<a href='enquete.php'>Acceder à l'enquête</a>";
        }
    }
    catch(Exception $e) {
        $retour = false;
        $message = "Authentification impossible";
        $texte = $e->getMessage();
        $texte = "<div>$texte</div>";
        $lien = "<a href='connexion.php'>Retour</a>";
    }
    echo "<main><h1>$message</h1><div class='container'><div class='info'>$texte$lien</div></div></main>";
}

require_once 'footer.php';