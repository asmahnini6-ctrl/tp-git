<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Ex04</title></head><body><pre>
<?php
$a=42; $b="42"; $c=15.8; $d=true; $e=false; $f=null;
var_dump($a,$b,$c,$d,$e,$f);
echo "--- Conversions ---\n";
$x=(int)$b; $y=(int)$c; $z=(string)$a;
var_dump($x,$y,$z);
echo "echo true: "; echo $d; echo "\n";
echo "echo false: "; echo $e; echo " (vide)\n";
var_dump($d,$e);
echo "--- Bool ---\n";
var_dump((bool)0,(bool)"0",(bool)"PHP",(bool)[]);
?>
</pre></body></html>