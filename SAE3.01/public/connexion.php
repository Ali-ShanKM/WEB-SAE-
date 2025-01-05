<?php
if(!session_id())
    session_start();

$title = "Se connecter";
require_once './header.php';
?>
    <main>
        <h1>Se connecter à votre compte adhérent</h1>
        <form id="forms" action="signin.php" method="post">
            <div class="formulaire">
                <div class="box">
                    <div class="saisir">
                        <label for="signin-email">E-mail</label>
                        <input type="email" name="email" id="signin-email" placeholder="Saisissez votre adresse e-mail" required>
                    </div>
                    <div class="saisir">
                        <label for="signin-passwd">Mot de passe</label>
                        <input type="password" name="password" id="signin-passwd" placeholder="Saisissez votre mot de passe" required>
                        <a class="forgotpasswd" href="">Mot de passe oublié ?</a>
                    </div>
                    <button type="submit" class="seconnecter">Se connecter</button>
                </div>
            </div>
        </form>
        <div class="autreMethode">
            <p>Vous n'êtes pas encore adhérent ? <a href="inscription.php">Créer un compte</a></p>
        </div>
    </main>
<?php
require_once './footer.php';