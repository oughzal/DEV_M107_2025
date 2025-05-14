<?php
include_once("stagiaire.php");
$stagiaires = StagiaireDB::getAll();
foreach($stagiaires as $stagiaire ):
?>


<?php endforeach;?>