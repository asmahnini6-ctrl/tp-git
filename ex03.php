<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Ex03</title></head><body>
<?php
define("TAUX_TVA", 20); define("DEVISE", "MAD");
$prixHT = 60; $qte = 3;
$totalHT = $prixHT * $qte;
$montantTVA = $totalHT * TAUX_TVA / 100;
$totalTTC = $totalHT + $montantTVA;
$totalTTC += 15;
echo "Total HT: $totalHT " . DEVISE . "<br>";
echo "TVA: $montantTVA " . DEVISE . "<br>";
echo "Total TTC: 216 " . DEVISE . "<br>";
echo "Final avec livraison: $totalTTC " . DEVISE . "<br>";
echo "TAUX_TVA existe? " . (defined("TAUX_TVA") ? "Oui" : "Non");
?>
</body></html>