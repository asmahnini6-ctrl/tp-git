<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Ex07</title></head><body>
<h2>Table de 7</h2>
<?php $nombre=7; for($i=1;$i<=10;$i++){ echo "$nombre x $i = ".($nombre*$i)."<br>"; } ?>
<h2>Pyramide 6 lignes</h2>
<?php for($i=1;$i<=6;$i++){ for($j=1;$j<=$i;$j++){ echo "* "; } echo "<br>"; } ?>
</body></html>