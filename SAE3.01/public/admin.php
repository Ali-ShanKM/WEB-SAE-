<?php
if(!session_id())
    session_start();

$title = "Admin";
require_once './header.php';
?>
    <main>
        <h1>Espace administrateur</h1>
    </main>
<?php
require_once './footer.php';