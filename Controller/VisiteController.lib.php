<?php
/*
 * Created by PhpStorm.
 * User: alexg78bis
 * Date: 07/11/2017
 * Time: 22:43
 */

$action = (isset($_REQUEST['action']))? $_REQUEST['action'] : "";

switch ($action){
	case "ajouter":
		//inclusion de la page d'affichage
		require "View/Visite/ajouterVisite.inc.php";
		//inclusion des scripts
		
		break;
	
	default:
		// Affichage de la liste des visite (pour possibilité de supprimer, ajouter, modifier, visualiser visite)
		break;
}