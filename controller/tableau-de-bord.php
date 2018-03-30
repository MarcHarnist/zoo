<?php 

	/******************************************************/
	/**                                                  **/                    
	/**              Marc L. Harnist                     **/ 
	/**              marcharnist.fr                      **/
	/**              25/03/2018                          **/
	/**              Updated: 25/03/2018                 **/
	/**                                                  **/
	/******************************************************/

		/**  On récupère les noms de tous les fichiers image du root/img/catalogue grâce
		/*   à la fonction explorer() de la class root/class/Explorer.php pour les afficher
		/*   dans la vue */
		$repertory = "./img/catalogue/";
		$catalogue = ImageExplorer::image_explorer($repertory);
		
