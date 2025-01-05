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
        $retour = $auth->register($_POST['email'], $_POST['password'], $_POST['repassword']);
        $message = "Vous êtes enregistré. Vous pouvez vous authentifier";
    }
    catch(Exception $e) {
        $retour = false;
        $message = "Enregistrement impossible : " . $e->getMessage();
    }
    echo $message;
}

require_once 'footer.php';