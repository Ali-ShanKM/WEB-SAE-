<?php
if(!session_id())
    session_start();

$title = "Enquête";
require_once '../app/BddConnect.php';
require_once './header.php';

if(!isset($_SESSION['email'])) {
    header("Location: connexion.php");
    exit();
} else {
    $bdd = new BddConnect();
    $pdo = $bdd->connexion();

    $stmt = $pdo->prepare(
        "SELECT * FROM enquete WHERE email = :email"
    );
    $stmt->execute(['email' => $_SESSION['email']]);

    $result = $stmt->fetch(\PDO::FETCH_ASSOC);

    if($result) {
        $ouvrirDiv = "<div class='cacher'>";
        $fermerDiv = "</div>";
        $message = "<h1>Vous avez déjà répondu à l'enquête</h1>
                    <div class='container'>
                    <div class='info'>Vous ne pouvez y répondre qu'une seule fois
                    <a href='index.php'>Retourner à l'accueil</a>
                    </div>
                    </div>";
    } else {
        $ouvrirDiv = "";
        $fermerDiv = "";
        $message = "";
    }
}
?>
    <main>
        <?php echo $ouvrirDiv;?>
        <h1>Enquête à destination des adhérents</h1>
        <form id="forms" action="envoyer-enquete.php" method="post">
            <div class="formulaire">
                <div class="box">
                    <div class="saisir">
                        <label for="enquete-age">Quel âge avez-vous ? <b class="obligatoire">*</b></label>
                        <input type="number" name="age" id="enquete-age" placeholder="Entrez votre âge" min="1" max="99" required>
                    </div>
                    <div class="saisir">
                        <label for="enquete-region">Dans quelle région vivez-vous ? <b class="obligatoire">*</b></label>
                        <select name="region" id="enquete-region" required>
                            <option value="" disabled selected>Choisissez votre région</option>
                            <option>Auvergne-Rhône-Alpes</option>
                            <option>Bourgogne-Franche-Comté</option>
                            <option>Bretagne</option>
                            <option>Centre-Val de Loire</option>
                            <option>Corse</option>
                            <option>Grand Est</option>
                            <option>Hauts-de-France</option>
                            <option>Île-de-France</option>
                            <option>Normandie</option>
                            <option>Nouvelle-Aquitaine</option>
                            <option>Occitanie</option>
                            <option>Pays de la Loire</option>
                            <option>Provence-Alpes-Côte d'Azur</option>
                            <option>Guadeloupe</option>
                            <option>Guyane</option>
                            <option>Martinique</option>
                            <option>Mayotte</option>
                            <option>La Réunion</option>
                            <option>Je vis à l'étranger</option>
                        </select>
                    </div>
                    <div class="saisir">
                        <label for="enquete-lieuDeVie">Quel est votre lieu de vie ?</label>
                        <select name="lieuDeVie" id="enquete-lieuDeVie">
                            <option value="">Choisissez votre lieu de vie</option>
                            <option>Dans la famille en permanence</option>
                            <option>Dans la famille avec une solution d'accueil ou des activités en journée</option>
                            <option>Dans la famille principalement mais avec un accueil temporaire ou séquentiel en établissement</option>
                            <option>Dans un logement indépendant</option>
                            <option>Dans un habitat inclusif</option>
                            <option>Dans un foyer d'accueil médicalisé (FAM)</option>
                            <option>Dans une maison d'accueil spécialisée (MAS)</option>
                            <option>Dans un foyer de vie ou foyer d'hébergement</option>
                            <option>En IME avec internat</option>
                            <option>Hospitalisation en psychiatrie</option>
                            <option>Autre</option>
                        </select>
                    </div>
                    <div class="saisir">
                        <label for="enquete-situation">Quelle est votre situation scolaire/professionnelle ? <b class="obligatoire">*</b></label>
                        <select name="situation" id="enquete-situation" required>
                            <option value="" disabled selected>Choisissez votre situation</option>
                            <option>Scolarité en milieu ordinaire</option>
                            <option>Scolarité en dispositif spécialisé de l'Éducation Nationale</option>
                            <option>Scolarité dans un établissement médico-social (IME, IMPRO, ...)</option>
                            <option>Instruction en famille</option>
                            <option>Études supérieures</option>
                            <option>Formation professionnelle</option>
                            <option>Activité professionnelle en milieu ordinaire</option>
                            <option>Activité professionnelle en milieu protégé (ESAT, Entreprise adaptée)</option>
                            <option>Sans activité scolaire ou professionnelle</option>
                            <option>Autre</option>
                        </select>
                    </div>
                    <button type="submit" class="envoyer">Envoyer</button>
                </div>
            </div>
        </form>
        <?php echo $fermerDiv;?>
        <?php echo $message;?>
    </main>
<?php
require_once './footer.php';