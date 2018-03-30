<?php
/**********************************************************
/*

22/03/2018: work on controller/aller-au-cafe.php The object $animal updating (setting lower energy "energy") is working. 
NOW I MUST UPDATE THE DATABASE.

TO DO
A class mother: group: mamiphères, régime alimentaire
A class daughter: sous-group: singes, fauves, serpents
A class daughter of daughter: espèces chimpanzée, baboin, gorilles.... 

An object: chimpanzée-tony, chimpanzée-grincheux, chimpanzée-albert....

Three table!
a table in database for group
a table for sous-group
a table for espèces
******************************************************************/


/* by Marc Harnist Source: Terence Hervin */

class Espece {

	protected $id;
	protected $nom;    // giraffe; chameau; elephant...
	protected $nombre; // de 1 à 9?
	const ENERGY = 30; // 30 au départ, bien nourri. 0 = mort de faim
	protected $loseEnergy = 10; // on perd 10 points d'énergie à la fois. 
	



	/**********************************************************************************************/
	/** Nom : construct                                                                          **/
	/**********************************************************************************************/
	/** Description : prepare un array pour un enregistrement dans la base de donnée             **/
	/**********************************************************************************************/
	/** Paramètres : [int] id numéro de l'indentifiant, première colonne de la base de donnée    **/
	/**                    et prmière entrée des arrays                                          **/
	/**              [string] nom de l'espèce                                                    **/
	/**              [int] nombre d'animaux de cette espèce                                      **/
	/**              [int] energy. 30 si l'animal est rassasié, 0 l'animal est mort de faim.     **/
	/**********************************************************************************************/
	/** Valeurs retournées : aucune.                                                             **/
	/**********************************************************************************************/
	/** Auteur : Marc L. Harnist                                                                 **/
	/**********************************************************************************************/
	/** Version : 1.0                                                                            **/
	/**********************************************************************************************/
	/** Créée le : 21/03/2018                                                                    **/
	/**********************************************************************************************/
	/** Modifiée le : 26/03/2018                                                                 **/	/**********************************************************************************************/	
  	public function __construct($zoo_espece){
		if(is_array($zoo_espece)){
			
		$this->id     = $zoo_espece['id'];
		$this->nom    = $zoo_espece['nom'];
		$this->nombre = $zoo_espece['nombre'];
		$this->energy = $this::ENERGY; // récupère 30, valeur par défaut
		
		}
		else {
			die('$zoo_espece doit être un array. root/class/zoo_espece.php ligne 63');
		}
	}
	/* Getter function  */
	public function getId(){
		return $this->id;
	}
	public function getNom(){
		return $this->nom;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function getEnergy(){
		return $this->energy;
	}
	public function setEnergy($energy){
		$this->energy = $energy;
	}
	public function loseEnergy(){
		$this->energy = $this->energy - $this->loseEnergy;
	}

}  
  
