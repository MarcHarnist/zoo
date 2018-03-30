<?php

/*******************************************************************************************************/
/** OBJECT ORIENTED PROGRAMMING LANGAGE                                                               **/
/*******************************************************************************************************/
/** CLASS name: DatabaseCreateZoo (child of the class DatabaseCreate)                                 **/
/*******************************************************************************************************/
/** AUTHOR: Marc L. Harnist                                                                           **/
/*******************************************************************************************************/
/** CREATION: 26/03/2018                                                                              **/
/*******************************************************************************************************/
/** UPDATED: 26/03/2018                                                                               **/
/*******************************************************************************************************/
/** FILE USING THIS CLASS: controller/depart.php                                                      **/
/**                        controller/aller-au-cafe                                                   **/
/**                                                                                                   **/
/*******************************************************************************************************/
/** FUNCTION INSIDE: create_database                                                                  **/
/**                                                                                                   **/
/**                                                                                                   **/
/*******************************************************************************************************/
class DatabaseCreateZoo extends Database {

		public $content = ""; // content put in database: one row or several rows
		public $table   = "zoo_espece"; // nombre d'animaux par espèce
		public $energy  = 30; // energy of the animal. 30 = top, 0 = dead hungry
		public $message;
		
		/**********************************************************************************************/
		/**     Nom : construct                                                                      **/
		/**********************************************************************************************/
		/**     Description : crée l'objet Database, et se connecte à la base de donnée mysql        **/
        /**                   en utilisant une fonction (connect()) de la classe mère (Database)     **/
		/**                                                    		                                 **/
		/**********************************************************************************************/
		/**     Paramètres : [array] : content - contenu a enregistrer dans la table                 **/
		/**                  [string] : content - contenu a enregistrer dans la table: juste une ligne /
		/**                  [string] : nom de la table - table name                                 **/
		/**********************************************************************************************/
		/**     Valeurs retournées : [BOOL] renvoie false si il y a un doublon (nbre anim.limité)******/
		/**********************************************************************************************/
		/**     Auteur : Marc L. Harnist                                                             **/
		/**********************************************************************************************/
		/**     Version : 1.0                                                                        **/
		/**********************************************************************************************/
		/**     Créée le : 21/03/2018                                                                **/
		/**********************************************************************************************/
		/**     Modifiée le : 26/03/2018                                                             **/	/**********************************************************************************************/	

		public function __construct()
		{
			parent::__construct();
			
		}

		// 1. CREATION
		// C from CRUD - Database Create

		/**********************************************************************************************/
		/**     Nom : create_database                                                                **/
		/**********************************************************************************************/
		/**     Description : enregistre l'attribut $this->content dans la base de données mysql     **/
		/**                   dans la table "zoo_espece"                                                 **/
		/**                                                    		                                 **/
		/**********************************************************************************************/
		/**     Paramètres : [string] ligne à coller à la suite de la base de donnée                 **/
		/**********************************************************************************************/
		/**     Valeurs retournées : [BOOL] renvoie false si il y a un doublon (nbre anim.limité)******/
		/**********************************************************************************************/
		/**     Auteur : Marc L. Harnist                                                             **/
		/**********************************************************************************************/
		/**     Version : 1.0                                                                        **/
		/**********************************************************************************************/
		/**     Créée le : 21/03/2018                                                                **/
		/**********************************************************************************************/
		/**     Modifiée le : 21/03/2018                                                             **/	/**********************************************************************************************/	
		function create_database($content){
			$this->content = $content;
			if(is_array($this->content)){
				foreach($this->content as  $zoo_espece){
					
					$this->zoo_espece = $zoo_espece;

					// Mysql request
					$req = $this->db->prepare('INSERT INTO '. $this->table .'(nom, nombre, energy) VALUE(:nom, :nombre, :energy)');
					$req->execute([
							 'nom'    => $this->zoo_espece[0],
							 'nombre' => $this->zoo_espece[1],
							 'energy' => $this->energy
							 ]);
				}
			}
			else
			{
				$this->message = '<p>$content n\'est pas un array.</p>';
			}
			
			$retour = ['message' => $this->message, 'content' => $this->content];
			
			return $retour;
		}
	} // Close the class