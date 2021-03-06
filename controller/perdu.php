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
$espece = $_SESSION['espece'];

$zoo_espece_de_l_animal = $espece;
	
	
/**   On se connecte à la base de donnée grâce à la classe root/class/ReadDatabaseZoo qui 
/*    elle-même utilise la classe mère Database pour récupérer les identifiants de connexion
/*    On récupère toutes les donnés de la table "zoo_espece" et on les place dans un array $lire
*/
$lire = new DatabaseReadZoo;	// Traduction: DatabaseReadZoo = BaseDeDonnéeLireZoo

// On cherche une seule ligne de la base de donnée stochée dans $lire (array)
$espece = $lire->read_database($espece);

// On récupère l'énergie qui a été modifiée déjà et enregistrée dans la base de donnée
$energy = $espece['energy'];


// On crée un objet: espece devient un objet.
// Exemple: girafe, avec un nombre: 5, une energy:30 au début par défaut, un id primaire
$espece = new Espece($espece); 
$espece->setEnergy($energy);

// Getter: on reçoit la nouvelle donnée "energy" que l'on vient de modifier dans l'objet Espece
// Grâce à public fonction 	public function getEnergy() dans root/class/Espece ligne ~74
$energy = $espece->getEnergy();

// Je mémorise l'espèce en cours de modification
$_SESSION['espece'] = $espece->getNom();
