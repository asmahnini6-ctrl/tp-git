<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Ex08</title></head><body>
<h3>1- Pairs 0-20 (10 en gras)</h3>
<?php $i=0; while($i<=20){ if($i==10) echo "<b>$i</b> "; else echo "$i "; $i+=2; } ?>
<h3>2- While vs Do-While</h3>
<?php $c=5; $count=0; while($c<5){ $count++; $c++; } echo "while: $count exec<br>";
$c=5; $count=0; do{ $count++; $c++; }while($c<5); echo "do-while: $count exec<br>"; ?>
<h3>3- Continue et Break</h3>
<?php for($i=1;$i<=20;$i++){ if($i>=16) break; if($i%3==0) continue; echo "$i "; } ?>
</body></html>