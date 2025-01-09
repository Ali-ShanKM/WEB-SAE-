<?php
if(!session_id())
    session_start();

$title = "Admin";
require_once './header.php';
require_once '../app/BddConnect.php';

if(!isset($_SESSION['email']) || $_SESSION['email'] !== "admin@soshepatites.org") {
    header("Location: connexion.php");
    exit();
}

$bdd = new BddConnect();
$pdo = $bdd->connexion();

$stmt = $pdo->prepare("SELECT * FROM enquete");
$stmt->execute();
$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

$ages = [];
$regions = [];
$lieuxDeVie = [];
$situations = [];
foreach ($resultat as $ligne) {
    $ages[] = $ligne['age'];
    $regions[] = $ligne['region'];
    $lieuxDeVie[] = $ligne['lieuDeVie'];
    $situations[] = $ligne['situation'];
}

$ageMoyen = array_sum($ages) / count($ages);

$regionCounts = array_count_values($regions);

$lieuDeVieCounts = array_count_values($lieuxDeVie);

$situationCounts = array_count_values($situations);
?>

<main>
    <h1>Espace administrateur</h1>
    <div class="stats">
        <h2>Statistiques sur l'âge</h2>
        <p>Âge moyen : <?php echo round($ageMoyen); ?> ans</p>
        <p>Les adhérents ont entre <?php echo min($ages) ?> et <?php echo max($ages); ?> ans</p>
    </div>
    <div class="stats">
        <h2>Répartition des utilisateurs par région</h2>
        <div id="graphiqueRegion"></div>
    </div>

    <!-- Graphique pour le lieu de vie -->
    <div class="stats">
        <h2>Répartition des utilisateurs par lieu de vie</h2>
        <div id="lieuDeVie-chart"></div>
    </div>

    <!-- Tableau des situations -->
    <div class="stats">
        <h2>Répartition des utilisateurs par situation</h2>
        <table id="situation-table">
            <thead>
            <tr>
                <th>Situation</th>
                <th>Nombre de personnes</th>
                <th>Pourcentage</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($situationCounts as $situation => $count): ?>
                <tr>
                    <td><?= $situation ?></td>
                    <td><?= $count ?></td>
                    <td><?= round(($count / count($resultat)) * 100, 2) ?>%</td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- D3.js scripts -->
    <script src="https://d3js.org/d3.v6.min.js"></script>
    <script>
        // Graphique des régions
        const regionData = <?php echo json_encode($regionCounts); ?>;
        const regionChart = d3.select("#graphiqueRegion")
            .append("svg")
            .attr("width", 1000)
            .attr("height", 600);

        const regionMargin = { top: 20, right: 20, bottom: 40, left: 40 };
        const regionWidth = 1000 - regionMargin.left - regionMargin.right;
        const regionHeight = 600 - regionMargin.top - regionMargin.bottom;

        const regionX = d3.scaleBand()
            .domain(Object.keys(regionData))
            .range([0, regionWidth])
            .padding(0.1);

        const regionY = d3.scaleLinear()
            .domain([0, d3.max(Object.values(regionData))])
            .nice()
            .range([regionHeight, 0]);

        const regionG = regionChart.append("g")
            .attr("transform", `translate(${regionMargin.left}, ${regionMargin.top})`);

        regionG.selectAll(".bar")
            .data(Object.entries(regionData))
            .enter().append("rect")
            .attr("class", "bar")
            .attr("x", d => regionX(d[0]))
            .attr("y", d => regionY(d[1]))
            .attr("width", regionX.bandwidth())
            .attr("height", d => regionHeight - regionY(d[1]))
            .attr("fill", "steelblue");

        regionG.append("g")
            .attr("class", "x axis")
            .attr("transform", `translate(0, ${regionHeight})`)
            .call(d3.axisBottom(regionX));

        regionG.append("g")
            .attr("class", "y axis")
            .call(d3.axisLeft(regionY));

        // Graphique du lieu de vie (pie chart)
        const lieuDeVieData = <?php echo json_encode($lieuDeVieCounts); ?>;
        const width = 500;
        const height = 500;
        const radius = Math.min(width, height) / 2;

        const lieuDeVieChart = d3.select("#lieuDeVie-chart")
            .append("svg")
            .attr("width", width)
            .attr("height", height)
            .append("g")
            .attr("transform", `translate(${width / 2}, ${height / 2})`);

        const pie = d3.pie().value(d => d[1]);
        const arc = d3.arc().innerRadius(0).outerRadius(radius);
        const color = d3.scaleOrdinal(d3.schemeCategory10);

        const pieData = pie(Object.entries(lieuDeVieData));

        // Ajouter un conteneur pour le texte d'info-bulle
        const tooltip = d3.select("#lieuDeVie-chart")
            .append("div")
            .style("position", "absolute")
            .style("background", "white")
            .style("border", "1px solid #ccc")
            .style("padding", "5px")
            .style("border-radius", "5px")
            .style("box-shadow", "0 2px 4px rgba(0, 0, 0, 0.2)")
            .style("pointer-events", "none")
            .style("opacity", 0);

        lieuDeVieChart.selectAll("path")
            .data(pieData)
            .enter().append("path")
            .attr("d", arc)
            .attr("fill", (d, i) => color(i))
            .on("mouseover", function (event, d) {
                // Afficher le tooltip
                tooltip.style("opacity", 1)
                    .html(`<strong>${d.data[0]}</strong>: ${d.data[1]} utilisateurs`)
                    .style("left", (event.pageX + 10) + "px")
                    .style("top", (event.pageY + 10) + "px");
            })
            .on("mousemove", function (event) {
                // Déplacer le tooltip avec la souris
                tooltip.style("left", (event.pageX + 10) + "px")
                    .style("top", (event.pageY + 10) + "px");
            })
            .on("mouseout", function () {
                // Cacher le tooltip
                tooltip.style("opacity", 0);
            });


        // Graphique des situations
        const situationTable = document.querySelector("#situation-table");
        const rows = situationTable.querySelectorAll("tbody tr");
        rows.forEach(row => {
            const countCell = row.cells[1];
            const percentageCell = row.cells[2];
            const total = <?php echo count($resultat); ?>;
            const count = parseInt(countCell.innerText);
            const percentage = (count / total) * 100;
            percentageCell.innerText = `${percentage.toFixed(2)}%`;
        });
    </script>
</main>
<?php require_once './footer.php';?>