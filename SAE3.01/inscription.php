<?php
if(!session_id())
    session_start();

$title = "Adhérer";
require_once './header.php';
?>
<main>
    <h1>Adhérer à SOS Hépatites</h1>
    <form id="forms">
        <div class="formulaire">
            <div class="box">
                <div class="saisir">
                    <label>
                        Nom
                        <input type="text" placeholder="Saisissez votre nom">
                    </label>
                </div>
                <div class="saisir">
                    <label>
                        Prénom
                        <input type="text" placeholder="Saisissez votre prénom">
                    </label>
                </div>
                <div class="saisir">
                    <label>
                        E-mail
                        <input type="email" placeholder="Saisissez votre adresse e-mail">
                    </label>
                </div>
                <div class="saisir">
                    <label>
                        Mot de passe
                        <input type="password" placeholder="Saisissez votre mot de passe">
                    </label>
                </div>
                <div class="saisir">
                    <label>
                        Confirmation du mot de passe
                        <input type="password" placeholder="Confirmez votre mot de passe">
                    </label>
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