<?php
if(!session_id())
    session_start();

$title = "Adhérer";
require_once './header.php';
?>
<main>
    <h1>Adhérer</h1>
    <form id="forms">
        <div class="formulaire">
            <div class="box">
                <div class="saisir">
                    <label>
                        Nom
                        <input type="text" placeholder="Entrez votre nom">
                    </label>
                </div>
                <div class="saisir">
                    <label>
                        Prénom
                        <input type="text" placeholder="Entrez votre prénom">
                    </label>
                </div>
                <div class="saisir">
                    <label>
                        E-mail
                        <input type="email" placeholder="Entrez votre adresse e-mail">
                    </label>
                </div>
                <div class="cocher">
                    <label>
                        <input type="checkbox">
                        Vous acceptez de recevoir la newsletter l'Hépatante de SOS Hépatites
                    </label>
                </div>
                <button type="submit" class="sabonner">S'abonner</button>
            </div>
        </div>
    <form>
</main>
<?php
require_once './footer.php';