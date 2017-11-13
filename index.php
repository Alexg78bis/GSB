<?php
function chargerClasse($classe){
	require 'Modele/'.$classe . '.php';
}
spl_autoload_register('chargerClasse');

session_start();

$pdo = MonPdo::getInstance();

require "View/IncludePart/head.inc.php";

require_once "Script/function.lib.php";

$uc = (isset($_GET['uc'])) ? $_GET['uc'] : "acceuil";

switch ($uc){
	case "visite":
		require_once "Controller/VisiteController.lib.php";
		break;
		
	default:
		// inclure acceuil
		break;
		
}

require  "View/IncludePart/footer.inc.php";
?>
