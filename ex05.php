<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Ex05</title></head><body>
<?php
$moyenne = 12;
if ($moyenne < 0 || $moyenne > 20) { echo "Note invalide"; }
elseif ($moyenne < 10) { echo "$moyenne : Non validé"; }
elseif ($moyenne < 12) { echo "$moyenne : Passable"; }
elseif ($moyenne < 14) { echo "$moyenne : Assez bien"; }
elseif ($moyenne < 16) { echo "$moyenne : Bien"; }
else { echo "$moyenne : Très bien"; }
?>
</body></html>