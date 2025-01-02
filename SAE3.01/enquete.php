<?php
if(!session_id())
    session_start();

$title = "Enquête";
require_once './header.php';
?>
    <main>
        <h1>Enquête à destination des adhérents</h1>
    </main>
<?php
require_once './footer.php';