<?php
function chargerClasse($classe){
	require 'Model/'.$classe . '.class.php';
}
spl_autoload_register('chargerClasse');

session_start();

require "View/IncludePart/head.inc.php";

$uc = (isset($_GET['uc'])) ? $_GET['uc'] : "acceuil";

switch ($uc){
	case "visite":
		require_once "Controller/VisiteController.lib.php";
		break;

	case 'Administration':
		require_once "Controller/AdministrationController.lib.php";
		break;

	default:
		// inclure acceuil
		break;
		
}

require  "View/IncludePart/footer.inc.php";
?>
