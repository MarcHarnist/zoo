<?php 
 /*
           _____________________
          |            			|     
          |   marcharnist.fr    |    
          |   21/03/2018   		|  
          |_____________________|    
*/

// On récupère l'array $zoo qu'on a placé dans une super globale.
// L'array $zoo contient autant d'arrays qu'il y a d'espèces d'animaux dans le zoo en cours.
$zoo = $_SESSION['zoo'];

// Tests sur la première espèce animals de l'array $zoo. Ici $zoo_espece_de_l_animal est un array
$espece = $zoo_espece_de_l_animal = $zoo[0][0]; // $zoo[0][0]; = nom de l'espère de cet animal. Exemple: antilope.

	// Mais vous pouvez aussi choisir une espèce en particulier. Exemple: $espece = 'lion';
	//	$espece = $zoo_espece_de_l_animal = 'lion';

	
	
/**   On se connecte à la base de donnée grâce à la classe root/class/ReadDatabaseZoo qui 
/*    elle-même utilise la classe mère Database pour récupérer les identifiants de connexion
/*    On récupère toutes les donnés de la table "zoo_espece" et on les place dans un array $lire
*/
$lire = new DatabaseReadZoo;	// Traduction: DatabaseReadZoo = BaseDeDonnéeLireZoo

// On cherche une seule ligne de la base de donnée stochée dans $lire (array)
$espece = $lire->read_database($espece);

// On crée un objet: espece devient un objet.
// Exemple: girafe, avec un nombre: 5, une energy:30 au début par défaut, un id primaire
$espece = new Espece($espece); 

// Pour s'amuser: nous faisons perdre de l'énergie (lose energy) à l'espèce animale. 
// Grâce à la fonction publique loseEnergy() dans root/class/Espece ligne ~80
$espece->loseEnergy(); // par défaut, l'espèce va perdre 10 points d'énergie (voir classe Espece)

// Getter: on reçoit la nouvelle donnée "energy" que l'on vient de modifier dans l'objet Espece
// Grâce à public fonction 	public function getEnergy() dans root/class/Espece ligne ~74
$energy = $espece->getEnergy();

// Mise à jour de la base de donnée avec l'objet espece modifié
$update_db = new DatabaseUpdateZoo($espece);


?>
<p class="p-3">L'énergie des <?=$zoo_espece_de_l_animal;?>s vaut <?=$energy;?> points au lieu de <?=$espece::ENERGY ;?> points au début.<p>
<p class="pl-3"><a href="<?=PAGE_URL;?>truncate">Vider la table "zoo_espece"</a>
<br>
Vous êtes ici -> <small><em><?=__FILE__;?></em></small> à la ligne: <?=__LINE__;?></p>


<?php
/*
/*  mettre à jour la base de donnée avec la nouvelle energie de l'espèce animale.
/*  Create a function like " databaseUpdate($animal_test); " in the classe DatabaseUpdateZoo
*/
