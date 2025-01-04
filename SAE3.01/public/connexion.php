<?php
if(!session_id())
    session_start();

$title = "Se connecter";
require_once './header.php';
?>
    <main>
        <h1>Se connecter à votre compte adhérent</h1>
        <form id="forms">
            <div class="formulaire">
                <div class="box">
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
                    <button type="submit" class="seconnecter">Se connecter</button>
                </div>
            </div>
        </form>
        <div class="autreMethode">
            <p>Vous n'êtes pas encore adhérent ? <a href="inscription.php">S'inscrire</a></p>
        </div>
    </main>
<?php
require_once './footer.php';