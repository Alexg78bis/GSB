<?php

/**
 * Created by PhpStorm.
 * User: Alexg78bis
 * Date: 28/11/2017
 * Time: 08:54
 */
class EchantillonManager
{
	public static function getLstEchantillonVisite(RapportVisite $visite){
		$query = MonPdo::getInstance()->prepare("SELECT * FROM echantillons WHERE rapNum = :rapNum");
		$query->execute(array("rapNum" => $visite->getRapNum()));
		return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Echantillon');
	}

	public static function getEchantillonById($id){
		$query = MonPdo::getInstance()->prepare('SELECT * FROM echantillons WHERE echNum = :id');
		$query->execute(array('id' => $id));
		$result = $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Echantillon');

		return (isset($result[0]))? $result[0] : new Echantillon();
	}


	public static function addEchantillon(Echantillon $echantillon){



	}
}
