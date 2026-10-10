<?php
if (isset($_GET['nom'])) {
    $nom = htmlspecialchars($_GET['nom']);
    echo "Bonjour, " . $nom;
}
?>