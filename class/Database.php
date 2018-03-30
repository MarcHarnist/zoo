<?php

/*******************************************************************************************************/
/** OBJECT ORIENTED PROGRAMMING LANGAGE                                                               **/
/*******************************************************************************************************/
/** CLASS NAME: Database                                                                              **/
/**   Database Class mother of the CRUD: 4 Database class children:                                   **/
/**									root/class/DatabaseCreate  array sent: all form in database pasted**/
/**									root/class/DatabaseRead    only a string: lion                    **/
/**									root/class/DatabaseUpdate  update only one entry                  **/
/**									root/class/DatabaseDelete  delete only one entry                  **/
/**                                                                                                   **/
/*******************************************************************************************************/
/** AUTHOR: Marc L. Harnist                                                                           **/
/*******************************************************************************************************/
/** CREATION: 21/03/2018                                                                              **/
/*******************************************************************************************************/
/** UPDATED: 26/03/2018                                                                               **/
/*******************************************************************************************************/
abstract class Database // abstract: on ne peut pas instancier cette classe!
{
			
	/** The constants DB_HOST, DB_NAME, DB_PASSWORD and DB_USERNAME are defined in config.php
	/*  All protected: reserved to children classes: DatabaseCreate, DatabaseRead...
	**/
	protected $host     = DB_HOST;     // Database host name
	protected $db_name  = DB_NAME;     // Name of the database
	protected $username = DB_USERNAME; // User's name
	protected $password = DB_PASSWORD; // My password
	protected $db;
	
	/**********************************************************************************************/
	/** Nom : __construct                                                                        **/
	/**********************************************************************************************/
	/** Description : crée l'objet Database avec les identifiants définis dans config.php        **/
	/**********************************************************************************************/
	/** Paramètres : aucun                                                                       **/
	/**********************************************************************************************/
	/** Valeurs retournées : aucune. On crée des attributs dans l'objet avec les identifiants    **/
	/**                      renseignés dans les variables ci-dessus et on se connecte à la      **/
	/**                      base de donnée en appellant la fonction connect()                   **/
	/**********************************************************************************************/
	/** Auteur : Marc L. Harnist                                                                 **/
	/**********************************************************************************************/
	/** Version : 1.0                                                                            **/
	/**********************************************************************************************/
	/** Créée le : 21/03/2018                                                                    **/
	/**********************************************************************************************/
	/** Modifiée le : 26/03/2018                                                                 **/	/**********************************************************************************************/	

	protected function __construct() // protected = reserved to children classes
	{
		$this->connect();// call the function connect() below
	}

	/**********************************************************************************************/
	/** Nom : connect()                                                                          **/
	/**********************************************************************************************/
	/** Description : connexion à la base de données                                             **/
	/**********************************************************************************************/
	/** Paramètres : aucun                                                                       **/
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
	
	protected function connect() // Function connect to database mysql, protected: reserved to child class
	{
			// Constants DB_HOST and other informed in config.php
			$this->db = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->db_name, $this->username, $this->password);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			$this->db->exec("SET CHARACTER SET utf8");
	}

} // close the class