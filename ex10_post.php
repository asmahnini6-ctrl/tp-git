<?php
$nom=isset($_POST['nom'])?trim($_POST['nom']):''; $prenom=isset($_POST['prenom'])?trim($_POST['prenom']):''; $groupe=isset($_POST['groupe'])?trim($_POST['groupe']):'';
if($nom==''||$prenom==''||$groupe==''){ echo "Veuillez remplir tous les champs. <a href='ex10_post.html'>Retour</a>"; exit; }
echo "Bienvenue ".htmlspecialchars($prenom,ENT_QUOTES,'UTF-8')." ".htmlspecialchars($nom,ENT_QUOTES,'UTF-8')." du groupe ".htmlspecialchars($groupe,ENT_QUOTES,'UTF-8');
?>