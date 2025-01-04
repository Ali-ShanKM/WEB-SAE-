<?php
if(!session_id())
    session_start();

$title = "Accueil";
require_once './header.php';
?>
    <main>
            <h1>Lumière sur les Hépatites B et D</h1>
            <ul id="lumiere">
                <li>
                    <div>
                        <img class="illustration" src="assets/svg/heart-rate-svgrepo-com.svg" alt="">
                        <h3>L'hépatite B, m'aider à la comprendre,<br>savoir ce qu'il faut faire : Portfolio</h3>
                        <a href="https://soshepatites.org/lhepatite-b-maider-a-la-comprendre-savoir-ce-quil-faut-faire-portfolio/"><button class="acceder">Accéder</button></a>
                    </div>
                </li>
                <li>
                    <div>
                        <img class="illustration" src="assets/svg/graph-bar-svgrepo-com.svg" alt="">
                        <h3>Les résultats des premiers états<br>généraux de l'hépatite B</h3>
                        <a href="https://soshepatites.org/les-resultats-des-premiers-etats-generaux-de-lhepatite-b/"><button class="acceder">Accéder</button></a>
                    </div>
                </li>
                <li>
                    <div>
                        <img class="illustration" src="assets/svg/circle-menu-svgrepo-com.svg" alt="">
                        <h3>Voir tous les articles</h3>
                        <a href="https://soshepatites.org/rubrique/lumiere-sur-les-hepatites-b-et-d/"><button class="fleche"><img src="assets/svg/arrow.svg" alt="->"></button></a>
                    </div>
                </li>
            </ul>
            <p class="italique">La prévention, l'information, la solidarité, la défense des personnes concernées par les hépatites virales, les maladies du foie, quels que soient les virus</p>
            <section>
                <article>
                    <a href="https://soshepatites.org/mashletter-n36-septembre-2024/">
                        <img src="assets/img/Mashletter%20n°36%20–%20Septembre%202024.png" alt="Mashletter n°36 – Septembre 2024">
                        <b class="hidden">Mashletter n°36 – Septembre 2024</b></a>
                    <p class="description">Mashletter n°36 – Septembre 2024</p>
                </article>
                <article>
                    <a href="https://soshepatites.org/forum-national-2024/">
                        <img src="assets/img/Forum%20National%202024.png" alt="Forum National 2024">
                        <b class="hidden">Les inscriptions sont ouvertes</b>
                    </a>
                    <p class="description">Forum National 2024</p>
                </article>
                <article>
                    <a href="https://soshepatites.org/etude-vaccifoie/">
                    <img src="assets/img/Étude%20Vaccifoie.png" alt="Étude Vaccifoie">
                    <b class="hidden">Faites entendre votre voix</b>
                </a>
                    <p class="description">Étude Vaccifoie</p>
                </article>
                <article>
                    <a href="https://soshepatites.org/journee-mondiale-contre-lhepatite-2024-2/">
                        <img src="assets/img/Journée%20mondiale%20contre%20l’hépatite%202024.png" alt="Journée mondiale contre l'hépatite 2024">
                        <b class="hidden">Communiqué de presse</b>
                    </a>
                    <p class="description">Journée mondiale contre l'hépatite 2024</p>
                </article>
                <article>
                    <a href="https://soshepatites.org/juin-sans-sucres-ajoutes-2023/">
                        <img src="assets/img/Juin%20sans%20sucres%20ajoutés.png" alt="Juin sans sucres ajoutés">
                        <b class="hidden">Édition 2024 : Merci pour votre participation !</b>
                    </a>
                    <p class="description">Juin sans sucres ajoutés</p>
                </article>
                <article>
                    <a href="https://soshepatites.org/le-guide-anti-nash/">
                        <img src="assets/img/Le%20Guide%20anti-NASH.png" alt="Le Guide anti-NASH">
                        <b class="hidden">Commander un exemplaire</b>
                </a>
                    <p class="description">Le Guide anti-NASH</p>
                </article>
                <article>
                    <a href="https://soshepatites.org/a-vos-agendas-2018-1/">
                        <img src="assets/img/À%20vos%20agendas%20!.png" alt="Prévenir les hépatites : Actions SOS Hépatites en région">
                        <b class="hidden">À vos agendas !</b>
                    </a>
                    <p class="description">À vos agendas !</p>
                </article>
                <article>
                    <a href="https://soshepatites.org/covid-19-informations-a-destination-des-personnes-a-risques/">
                        <img src="assets/img/Informations%20à%20destination%20des%20personnes%20à%20risques.png" alt="Informations à destination des personnes à risques">
                        <b class="hidden">Covid-19 : Restons informés et acteurs de notre santé !</b>
                    </a>
                    <p class="description">Informations à destination des personnes à risques</p>
                </article>
            </section>
    </main>
<?php
require_once './footer.php';