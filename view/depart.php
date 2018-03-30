<article class="row">
	<header class="col-lg-12 p-3">
		<h2 class="h1 col-lg-12 ml-0 text-muted">Votre première journée de manager!</h2>
	</header>
	<div class="col-lg-12">
		
		<?php

		/**   OPTIONS: afficher une virgule et un point à la fin, afficher un s ou x au pluriel
		/*    Pour cela on doit savoir quand on arrive au dernier affichage pour remplacer la virgule
		/*    par un point. D'où l'utilisation de la clé $key et de la fonction count avant la fin du foreach
		/*    On vérifie aussi si le nombre > 0
		/**/
		$liste = ""; //liste de la commande des animaux qui sera affichée après le foreach
		foreach($zoo['form'] as $id => $animal) //$zoo['form']= données du formulaire, key = id, $animal = espèce et nombre
		{
			// $animal est un tableau qui contient le nom et le nombre de chaque animal dans le zoo
			$zoo_espece = $animal[0]; $nombre = $animal[1];
			
			// Ajout d'un s ou x si besoin (pluriels) grâce à root/class/FormManager.php
			$zoo_espece = FormManager::accorder_pluriels($zoo_espece, $nombre);
			
			// Remplacer - dans le nom du fichier par un espace grâce à la classe root/class/FormManager.php
			$zoo_espece = FormManager::cleaner($zoo_espece, "-");
			
			//le nombre d'animaux achetés pour chaque espèce et le nom de l'espèce sont mis en mémoire dans $liste
			$liste .= "$nombre $zoo_espece"; //
			
			$id++; // pour commencer à 1 au lieu de 0
			
			//Si l'identifiant ($id) correspond au nombre de ligne du tableau on affiche un point, sinon une virgule.
			if($id<count($zoo['form'])) $liste .= ", "; else $liste .= ". ";// ajoute une virgule ou un point, si c'est la dernière ligne.
		}
		?>
			
		<!-- On affiche la liste des animaux achetés et détaillée par le code php ci-dessus -->
		<p>Vous avez commandé <?=$liste;?></p>
		
		<p>Vos animaux sont livrés: le personnel s'occupe de tout. Vous commencez votre première vraie journée de manager ce matin. Mais vous avez un peu de temps devant vous. 
		Par où allez-vous commencer votre aventure?
		</p>
		
		<p class="col-lg-8 mt-5 mx-auto">
			<a class="btn btn-primary float-left mr-5" href="<?=PAGE_URL;?>aller-au-zoo">
				ALLER AU ZOO
			</a>
		</p>
		
		<p class="col-lg-8 mt-5 mx-auto">
			<a class="btn btn-primary" href="<?=PAGE_URL;?>aller-au-cafe">
				ALLER DEJEUNER AU CAFE
			</a>
		</p>
		
</article>

