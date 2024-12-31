<?php
if(!session_id())
    session_start();

$title = "Modes de contamination";
require_once './header.php';
?>
<main>
    <h1>Modes de contamination</h1>
    <div class="modes-de-transmission">
        <img src="assets/img/Modes-de-transmission-Hepatites-Virales_20220728-V2-1.png" alt="Modes de transmission des virus hépatites">
        <h3><a href="https://soshepatites.org/wp-content/uploads/2022/07/Modes-de-transmission-Hepatites-Virales_20220728-V2.pdf" target="_blank" rel="noopener noreferrer">Télécharger le tableau des modes de transmission</a></h3>
        <p>
            Le virus de l'hépatite D n'infecte que les personnes déjà concernées par le virus de l'hépatite B. On peut être contaminé par les 2 virus (B et D) en même temps ou le virus de l'hépatite D surinfecte l'hépatite B chronique déjà présente.<br>
            <b>On ne peut donc pas avoir l'hépatite D seule !</b>
        </p>
    </div>
</main>
<?php
require_once './footer.php';