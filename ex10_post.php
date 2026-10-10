<?php
if (isset($_POST['nom'])) {
    $nom = htmlspecialchars($_POST['nom']);
    echo "Bonjour, " . $nom;
}
?>