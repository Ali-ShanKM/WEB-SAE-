<?php
if(!session_id())
    session_start();

$title = "Enquête";
require_once './header.php';
if(isset($_SESSION['email'])) {
    $email_utilisateur = $_SESSION['email'];
} else {
    header("Location: connexion.php");
    exit();
}
?>
    <main>
        <h1>Enquête à destination des adhérents</h1>
    </main>
<?php
require_once './footer.php';