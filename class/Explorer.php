<?php

/*******************************************************************************************************/
/** OBJECT ORIENTED PROGRAMMING LANGAGE                                                               **/
/*******************************************************************************************************/
/** CLASS Explorer                                                                                    **/
/*******************************************************************************************************/
/** NAME: Explorer                                                                                    **/
/*******************************************************************************************************/
/** AUTHOR: Marc L. Harnist                                                                           **/
/*******************************************************************************************************/
/** CREATION: 25/03/2018                                                                              **/
/*******************************************************************************************************/
/** UPDATED: 25/03/2018                                                                               **/
/*******************************************************************************************************/
/** FILE USING THIS CLASS: http://marcharnist.fr/zoo/controller/achats.php                            **/
/**                                                                                                   **/
/*******************************************************************************************************/
/** FUNCTION INSIDE: explorer                                                                            **/
/**                                                                                                   **/
/*******************************************************************************************************/
class Explorer {
	
	public $dir; // Directory name that will be read
	
		// Constructer
	public function __construct(){
		$dir = $this->dir;
	}

	/**********************************************************************************************/
	/**    FUNCTION                                                                              **/
	/**********************************************************************************************/
	/**    Nom : explorer                                                                           **/
	/**********************************************************************************************/
	/**    Description : lit les noms des fichiers d'un dossier et les renvoie dans un array     **/
	/**                                                   		                                 **/
	/**********************************************************************************************/
	/**    Paramètres : [string] nom du repertoir à lire                                         **/
	/**********************************************************************************************/
	/**    Valeurs retournées : [array] avec les noms des fichiers                               **/
	/**********************************************************************************************/
	/**    Auteur : Marc L. Harnist                                                             **/
	/**********************************************************************************************/
	/**    Version : 1.0                                                                        **/
	/**********************************************************************************************/
	/**    Créée le : 25/03/2018                                                                **/
	/**********************************************************************************************/
	/**    Modifiée le : 25/03/2018                                                             **/	/**********************************************************************************************/
	public static function explorer($dir){
		
		$count = $count_sql = $count_dir = $count_php = $count_img = 1;
		$autres_fichiers = $repertoires = $fichiers_sql = $fichiers_php = $fichiers_img = "";
		$list = [];
		$dir = "./img/catalogue/";
		$directory = $dir;
		//  si le dossier pointe existe
		if (is_dir($dir)) {

		   // si il contient quelque chose
		   if ($dh = opendir($dir))
		   {
				// boucler tant que quelque chose est trouvé
				while (($file = readdir($dh)) !== false) 
				{
					
					// affiche le nom et le type si ce n'est pas un element du systeme
					$type = filetype($dir.$file);
					
					$signe_caracteristique_d_un_programme = "__";
					
					// Voyons si le fichier ou le repertoire est un programme:
					if (stripos($file, $signe_caracteristique_d_un_programme) == TRUE)
					{
						$file = 'programme'; // si on veut afficher les programmes supprimer cette ligne 
					}
					if( $file != '.' && $file != '..' && $file !== 'programme' && $file !== 'index.php' && $file !== 'menu.php') 
					{
						// Est-ce un repertoire ou un fichier? Si oui l'affichage sera différent
						if($type == 'dir')
						{
							{
							$url = $file;
							$name_without_ = str_replace("_"," ",$file);//erase _
							$file = ucfirst($file);//On met une majuscule. Plus joli.
							$repertoires .= "$count_dir. <a href=\"./$url\">$name_without_</a> <br />";
							$count_dir++;
							}
						}
						else
						// Ce n'est pas un repertoire mais un fichier
						{					  // Récupération de l'extension
						  $extension = pathinfo($file, PATHINFO_EXTENSION);
						  if($extension == 'sql')
						  {
							  $url = $file;
							  $file = ucfirst($file);//On met une majuscule. Plus joli.
							  $name_without_ = str_replace("_"," ",$file);//erase _
							  $fichiers_sql .= "$count_sql. <a href=\"./$url\">$name_without_</a> <br />";
							  $count_sql++;						  
						  }
						  elseif($extension == 'php')
						  {
							/* si le fichier ne contient pas __ on l'afiche dans le menu.*/
							$url = $file;
							$file = ucfirst($file);//On met une majuscule. Plus joli.
							$name_without_ = str_replace("_"," ",$file);//erase _
							$fichiers_php .= "$count_php. <a href=\"$dir.$url\">$name_without_</a> <br />";
							$count_php++;
						  }
						  elseif($extension == 'jpg')
						  {
							/* si le fichier ne contient pas __ on l'afiche dans le menu.*/
							$url = $file;
							
							$name = $file; // for array $list
							$extension = "." . $extension;
							$name_without_extension = str_replace($extension, "", $name); // for array $list
							
							$file = ucfirst($file);//On met une majuscule. Plus joli.
							$name_without_ = str_replace("_"," ",$file);//erase _
							$fichiers_img .= "$count_php. <a href=\"$directory$url\">$name_without_</a> <br />";
							$count_img++;
							$list[] = $name_without_extension;
						  }
						  else // tous les autres fichiers
							{
							/* si le fichier ne contient pas __ on l'afiche dans le menu.*/
							$url = $file;
							$file = ucfirst($file);//On met une majuscule. Plus joli.
							$autres_fichiers .= "$count. <a href=\"./$url\">$file</a> <br />";
							$count++;
						  }
							
						}
				   }
				}
			   // on ferme la connection
			   closedir($dh);
			   return $list;
		   }
		}
		if($repertoires !== ""){
			?>
			<hr>
			<h5>Repertoires:</h5>
			<p><?=$repertoires;?></p>
			<?php
		}
		if($fichiers_php !== ""){
			?>
			<hr>
			<h5>Fichiers php:</h5>
			<p><?=$fichiers_php;?></p>
			<?php
		}
			if($fichiers_sql !== ""){
			?>
			<hr>
			<h5>Fichiers SQL à télécharger</h5>
			<p><?=$fichiers_sql;?></p>
			<?php
		}
		if($fichiers_img !== ""){
			?>
			<hr>
			<h5>Fichiers images</h5>
			<p><?=$fichiers_img;?></p>
			<?php
		}
		if($autres_fichiers !== ""){
			?>
			<hr>
			<h5>Autres fichiers:</h5>
			<p><?=$autres_fichiers;?></p>
			<?php
		}
	} // close function 
}// close the class