<article class="row">
	<header class="col-lg-12 p-3">
		<h2 class="h1 col-lg-12 ml-0 text-muted">Votre première journée de manager!</h2>
	</header>
	<div class="col-lg-12">
		
		<p>Vous avez commandé <?php

			// OPTIONS: afficher une virgule et un point à la fin, afficher un s ou x au pluriel
			// Pour cela on doit savoir quand on arrive au dernier affichage pour remplacer la virgule
			// par un point. D'où l'utilisation de la clé $key et de la fonction count avant la fin du foreach
			// On vérifie aussi si le nombre > 0
				foreach($zoo['form'] as $key => $animal) // $animal = object with a name, nbre, repu(energy)
				{
					$zoo_espece = $animal[0]; $nombre = $animal[1];
					echo $nombre; //afffiche le nombre d'animaux achetés pour chaque espèce
					echo " "; // un petit espace pour l'esthétique
					echo $zoo_espece; //afffiche l'espèce de l'animal
					
					// $ajouter_un_s_ou_un_x = FormManager::ajouter_un_s_ou_un_x($zoo_espece);
					
					if($nombre>1){
						if($zoo_espece == "chameau"){
							echo "x";
						}
						elseif($zoo_espece == "rhinoceros"){
							echo "";
						}
						else {
							echo "s";
						}
					}
					
					if($key<count($zoo['form'])) echo ", "; else echo ".";
				}
			?>
		</p>
		
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
	</div>
</article>

