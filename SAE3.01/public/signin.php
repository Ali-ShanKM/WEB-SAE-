<?php
if(!session_id())
    session_start();

require_once 'header.php';
require_once '../app/BddConnect.php';
require_once '../app/MariaDBUserRepository.php';
require_once '../app/Authentification.php';

$bdd = new BddConnect();

$pdo = $bdd->connexion();
$trousseau = new MariaDBUserRepository($pdo);
$auth = new Authentification($trousseau);


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $retour = $auth->authenticate($_POST['email'], $_POST['password']);
        $message = "Authentification réussie";
    }
    catch(Exception $e) {
        $retour = false;
        $message = "Authentification impossible : " . $e->getMessage();
    }
    echo $message;
}

require_once 'footer.php';