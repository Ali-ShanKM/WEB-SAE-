<?php
if(!session_id())
    session_start();

$title = "Adhérer";
require_once './header.php';
?>
<main>
    <h1>Adhérer à SOS Hépatites</h1>
    <form id="forms" action="signup.php" method="post">
        <div class="formulaire">
            <div class="box">
                <div class="saisir">
                    <label for="signup-lname">Nom</label>
                    <input type="text" name="nom" id="signup-lname" placeholder="Saisissez votre nom" required>
                </div>
                <div class="saisir">
                    <label for="signup-fname">Prénom</label>
                    <input type="text" name="prenom" id="signup-fname" placeholder="Saisissez votre prénom" required>
                </div>
                <div class="saisir">
                    <label for="signup-email">E-mail</label>
                    <input type="email" name="email" id="signup-email" placeholder="Saisissez votre adresse e-mail" required>
                </div>
                <div class="saisir">
                    <label for="signup-passwd">Mot de passe</label>
                    <input type="password" name="password" id="signup-passwd" placeholder="Saisissez votre mot de passe" required>
                </div>
                <div class="saisir">
                    <label for="signup-repasswd">Confirmation du mot de passe</label>
                    <input type="password" name="repassword" id="signup-repasswd" placeholder="Confirmez votre mot de passe" required>
                </div>
                <button type="submit" class="sinscrire">S'inscrire</button>
            </div>
        </div>
    </form>
    <div class="autreMethode">
        <p>Vous êtes déjà adhérent ? <a href="connexion.php">Se connecter</a></p>
    </div>
</main>
<?php
require_once './footer.php';