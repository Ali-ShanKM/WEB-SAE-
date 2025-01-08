<?php
if(!session_id())
    session_start();

require_once '../app/BddConnect.php';

require_once 'header.php';

$bdd = new BddConnect();

$pdo = $bdd->connexion();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $stmt = $pdo->prepare(
            "INSERT INTO enquete (email, age, region, lieuDeVie, situation) VALUES (:email, :age, :region, :lieuDeVie, :situation);"
        );
        $retour = $stmt->execute([
            'email' => $_SESSION['email'],
            'age' => $_POST['age'],
            'region' => $_POST['region'],
            'lieuDeVie' => $_POST['lieuDeVie'] ?? null,
            'situation' => $_POST['situation']
        ]);
        $message = "Formulaire envoyé";
        $texte = "<div>Merci d'avoir répondu à cette enquête !</div>";
        $lien = "<a href='index.php'>Retourner à l'accueil</a>";
    } catch(Exception $e) {
        $retour = false;
        $message = "Echec d'envoi du formulaire";
        $texte = $e->getMessage();
        $texte = "<div>$texte</div>";
        $lien = "<a href='enquete.php'>Retour</a>";
    }
    echo "<main><h1>$message</h1><div class='container'><div class='info'>$texte$lien</div></div></main>";
}

require_once 'footer.php';