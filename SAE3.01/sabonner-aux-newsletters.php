<?php
if(!session_id())
    session_start();

$title = "S'abonner aux newsletters";
require_once './header.php';
?>
        <main>
            <h1>S'abonner aux newsletters</h1>
            <form id="forms">
                <div class="formulaire">
                    <h2>Newsletter l'Hépatante</h2>
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
                <div class="formulaire">
                    <h2>Newsletter MASH</h2>
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
                                Vous acceptez de recevoir la newsletter MASH de SOS Hépatites
                            </label>
                        </div>
                        <button type="submit" class="sabonner">S'abonner</button>
                    </div>
                    <div>
                        <p>
                            La MASH, cette maladie qui ne dit pas son nom, cette maladie des rendez-vous ratés qui touche 20 % de la population mondiale, 1 million en France, méconnue du grand public et de bon nombre de médecins.<br>
                            À l'occasion de la Journée mondiale de lutte contre la MASH le 12 juin, nous lançons une newsletter spéciale sur cette maladie pour mieux la comprendre aujourd'hui et pour mieux la combattre demain.<br>
                            Abonnez-vous à cette nouvelle newsletter mensuelle et expérimentale, destinée aux personnes vivant avec la MASH et à tous ceux qui les accompagnent !
                        </p>
                    </div>
                </div>
            </form>
        </main>
<?php
require_once './footer.php';