<?php
if (empty($_GET['nom'])) { echo "<a href='ex10_get.html'>Retour</a>"; exit; }
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$groupe = $_GET['groupe'];
echo "Bienvenue ".htmlspecialchars($prenom)." ".htmlspecialchars($nom)." du groupe ".htmlspecialchars($groupe);
?>