<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Ex09</title></head><body>
<?php
$notes=["Amine"=>12,"Sara"=>16,"Youssef"=>8,"Lina"=>14,"Adam"=>10];
$somme=0; $valides=0; $max=0; $meilleur="";
foreach($notes as $n=>$note){ $somme+=$note; if($note>=$max){ $max=$note; $meilleur=$n; } if($note>=10) $valides++; }
$moy=$somme/count($notes);
?>
<table border=1><tr><th>Nom</th><th>Note</th><th>Statut</th></tr>
<?php foreach($notes as $n=>$note){ echo "<tr><td>$n</td><td>$note</td><td>".($note>=10?"Validé":"Non validé")."</td></tr>"; } ?>
</table>
<p>Moyenne: <?= $moy ?> | Validés: <?= $valides ?> | Meilleur: <?= $meilleur ?> (<?= $max ?>)</p>
</body></html>