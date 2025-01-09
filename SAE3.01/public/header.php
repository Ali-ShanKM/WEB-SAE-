<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo "$title - SOS Hépatites"?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/searchBar.js" type="module"></script>
    <script src="assets/js/pageCourante.js" type="module"></script>
</head>
<body>
<header>
    <a href="index.php"><img id="logo" src="assets/img/logo-federation-sos-hepatites.png" alt="SOS Hépatites"></a>
    <input type="checkbox" id="menu-toggle" class="menu-toggle">
    <label for="menu-toggle" class="burger-menu" aria-label="Menu">
        <span></span>
        <span></span>
        <span></span>
    </label>
    <ul class="navbar">
        <li id="titleIndex"><a href="index.php">Accueil</a></li>
        <li id="titleAssociation"><a href="association.php">L'association</a></li>
        <li>
            <div class="dropdown">
                <a href="https://soshepatites.org/rubrique/brochures/">Santé – Social</a>
                <ul class="dropdown-content">
                    <li><a href="https://soshepatites.org/rubrique/brochures/?soshfilter=brochures">Outils et brochures</a></li>
                    <li><a href="https://soshepatites.org/le-foie-et-les-hepatites/">Le foie et les hépatites</a></li>
                    <li><a href="https://soshepatites.org/outils-non-invasifs-devaluation-de-fibrose/">Les outils non-invasifs d'évaluation de la fibrose</a></li>
                    <li><a href="https://soshepatites.org/quil-faut-savoir/">Ce qu'il faut savoir</a></li>
                    <li><a href="https://soshepatites.org/le-traitement/">Le traitement</a></li>
                    <li><a href="https://soshepatites.org/apres-le-traitement/">Après le traitement</a></li>
                    <li><a href="https://soshepatites.org/rubrique/nutrition/infos-nutrition/">Infos nutrition</a></li>
                    <li><a href="https://soshepatites.org/rubrique/nutrition/recettes/">Recettes</a></li>
                    <li><a href="https://soshepatites.org/juridique-social/">Juridique – Social</a></li>
                    <li><a href="https://soshepatites.org/plateforme/services/lexique-medicale/">Lexique médical</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="dropdown">
                <a href="">Prévention</a>
                <ul class="dropdown-content">
                    <li id="titleModesDeContamination"><a href="modes-de-contamination.php">Modes de contamination</a></li>
                    <li><a href="https://soshepatites.org/le-depistage/">Le dépistage</a></li>
                    <li><a href="https://soshepatites.org/reduire-risques-de-contamination/">Réduire les risques de contaminiation</a></li>
                    <li><a href="https://soshepatites.org/la-vaccination/">La vaccination</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="dropdown">
                <a href="https://soshepatites.org/rubrique/nos-formations/">Formations</a>
                <ul class="dropdown-content">
                    <li><a href="https://soshepatites.org/formation-trod-vhb-trod-vhc-et-trod-vih/">Réalisation des TROD VHB, VHC et VIH</a></li>
                    <li><a href="https://soshepatites.org/formation-biomedical-niveau1-et-ecoute-active/">Formation biomédicale niveau 1 et écoute active</a></li>
                </ul>
            </div>
        </li>
        <li><a href="https://soshepatites.org/association/soutenez-nous/">Faire un don</a></li>
    </ul>
    <label class="barreRecherche">
        <img src="assets/svg/loupe-search.svg" alt="">
        <input type="search" placeholder="Rechercher">
    </label>
    <?php
    if(isset($_SESSION['email'])) {
        echo "<a href='signout.php'><img id='signout' alt='Se deconnecter' title='Se déconnecter du compte\n" . $_SESSION['email'] . "' src='assets/svg/share-svgrepo-com.svg'></a>";
    } else {
        echo "<a href='connexion.php'><img id='userCircle' src='assets/svg/user-male-circle-svgrepo-com.svg' title='Se connecter' alt='Se connecter'></a>";
    }
    ?>
</header>