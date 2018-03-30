<?php

/***************************************************************************************************/
/** OBJECT ORIENTED PROGRAMMING LANGAGE                                                           **/
/***************************************************************************************************/
/** CLASS TransformObjectToArray                                                                  **/
/***************************************************************************************************/
/** NAME: TransformObjectToArray                                                                  **/
/***************************************************************************************************/
/** AUTHOR: Marc L. Harnist                                                                       **/
/***************************************************************************************************/
/** CREATION: 25/03/2018                                                                          **/
/***************************************************************************************************/
/** UPDATED: 25/03/2018                                                                           **/
/***************************************************************************************************/
/** FILE USING THIS CLASS: http://marcharnist.fr/zoo/controller/depart.php                        **/
/**                                                                                               **/
/***************************************************************************************************/
/** FUNCTION INSIDE: transform_object_to_array                                                    **/
/**                                                                                               **/
/***************************************************************************************************/
class TransformObjectToArray {

	/******************************************************************************************/
	/** Nom : transform_object_to_array                                                      **/
	/******************************************************************************************/
	/** Description : transforme un object qui contient un array en array simple             **/
	/**                                                		                                 **/
	/******************************************************************************************/
	/** Paramètres : [objet] l'objet qui contient l'array à simplifier en array pour la vue  **/
	/******************************************************************************************/
	/** Valeurs retournées : [array] avec le contenu de l'objet                              **/
	/******************************************************************************************/
	/** Auteur : Marc L. Harnist                                                             **/
	/******************************************************************************************/
	/** Version : 1.0                                                                        **/
	/******************************************************************************************/
	/** Créée le : 25/03/2018                                                                **/
	/******************************************************************************************/
	/** Modifiée le : 25/03/2018                                                             **/	/******************************************************************************************/
  	public static function transform_object_to_array($object){
		if(is_object($object))// verify if $object is an object
		{
			$array = (array)$object;
			return $array;
		}
		else // error: $object is not an object
		{
			exit("La valeur envoyée n'est pas un object. Or cette fonction ne transforme que des objets en tableau.");
		}
	}
} // Close de class