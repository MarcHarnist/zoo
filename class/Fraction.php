<?php

// Par défaut PDO renvoie un tableau
// FETCH_ASSOC renvoie un tableau associatif
foreach($db->query("SELECT * FROM utilisateur", PDO::FETCH_ASSOC) as $row){
	var_dump($row);
}

// I create my own exception child class
class NullDiviserException extends Exception{} // Exception{} is a PHP object

class Fraction {
    protected $numerateur;
    protected $denominateur;

    public function __construct($numerateur = 0, $denominateur = 0){
          $this->numerateur = $numerateur;
          $this->denominateur = $denominateur;
		  
		  // using THROW
		  if($this->denominateur == 0){
			  throw new NullDiviserException("Division par zéro impossible mon petit ami!");
			  // Notez que Exception est un objet
			  
		  }
	}
    public function __toString(){
		return $this->numerateur."/".$this->denominateur;
    }
}
