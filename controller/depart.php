<?php 

	/******************************************************/
	/**                                                  **/                    
	/**              Marc L. Harnist                     **/ 
	/**              marcharnist.fr                      **/
	/**              21/03/2018                          **/
	/**              Updated: 27/03/2018                 **/
	/**                                                  **/
	/******************************************************/

	// On récupère les données de la page achats: achats des animaux pour le zoo et on crée des objets!

		// Les valeurs de la super globale $_POST sont traités dans la class root/class/FormManager.php
		// The values of the global $_POST are in the class root/class/FormManager treated
		$traitement_du_formulaire = new FormManager($_POST);
	
		//On transforme l'objet qui contient les inputs du formulaire en array pour un affichage plus simple dans la vue
		//Transform object to simple array for an easier displaying in the view
		$zoo = TransformObjectToArray::transform_object_to_array($traitement_du_formulaire);
		
		// On se connecte à la base de donnée mysql grâce à la classe: root/class/DatabaseCreateZoo 
		// Let's connect us to database mysql thanks to the class: root/class/DatabaseCreateZoo
		$DatabaseCreateZoo = new DatabaseCreateZoo;
		
		// On envoie le zoo en entier dans la base de donnée (zoo complet) - create an entry in database (the complete zoo)
		$DatabaseCreateZoo->create_database($zoo['form']); // create_database() est la fonction php qui enregistre
		
		// On sauvegarde l'array zoo dans une super globale...
		$_SESSION['zoo'] = $zoo['form'];