<?php 
 /*
           _____________________
          |            			|     
          |   marcharnist.fr    |    
          |   21/03/2018   		|  
          |_____________________|    
*/


// Vider la table
$table = new DatabaseTableTruncate();
if(isset($espece)){
	var_dump($espece);
	unset($espece);
}
