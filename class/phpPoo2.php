<?php
///////////////////////////////////////////////////////////////////////////////////////////
//EXEMPLE POUR LES POINTS DE VIE DU ZOO
//////////////////////////////////////////////////////////////////////////////////////////
class Espece{
    protected $id_zoo_espece;
    protected $regAlim;

    public function __construct($id_zoo_espece, $regAlim){
        $this->id_zoo_espece = $id_zoo_espece;
        $this->regAlim = $regAlim;
    }
}

abstract class Animal extends zoo_espece{
     
    protected $id_animal;
    protected $pv_max;
    protected $photo;

    public function __construct( $id_zoo_espece, $regAlim, $id_animal, $pv_max, $photo){
       parent::__construct($id_zoo_espece, $regAlim);

       $this->id_animal = $id_animal;
       $this->pv_max = $pv_max;
       $this->photo = $photo;
    }
}
class AnimalCourant extends Animal{
     
    protected $id_animal_courant;
    protected $pv_actuel;
    protected $faim;

    public function __construct($id_zoo_espece, $regAlim, $id_animal, $pv_max, $photo, $id_animal_courant, $pv_actuel, $faim ){
        parent::__construct($id_zoo_espece, $regAlim, $id_animal, $pv_max, $photo);

        $this->id_animal_courant = $id_animal_courant;
        $this->pv_actuel = $pv_actuel;
        $this->faim = $faim;
    }

}
die;
/////////////////////////////////////////////////////////////////////////////////////////////
//LES REQUETES BDD
//////////////////////////////////////////////////////////////////////////////////////////////
//Mettre a jour la bdd avec UPDATE
//********************************* */
$dbh = new PDO('mysql:host=localhost;dbname=id4185618_test','id4185618_root','rootroot');
var_dump($dbh);

$reqUpdate = "UPDATE utilisateur SET age=:age WHERE id=:id";//surtout ne pas oublier le where, sinon modifie toute la bdd

$stmt = $dbh->prepare($reqUpdate);

$stmt->execute(array(":age"=> 27,":id =>1"));


//requette pour afficher la bdd
//*********************************



$reqSelect = "SELECT * FROM utilisateur,annonce WHERE utilisateur.id = id_utilisateur";

$stmt = $dbh->prepare($reqSelect);

$stmt->execute();

$res = $stmt->fetchAll();

var_dump ($res);
//avec fetchObject, on recupere sous forme d'objet

///////////////////////////////////////////////////////////////////////////
//PDO php //requete d'insertion(INSERT INTO)
//***************************************** */

// $dbh = new PDO(
//     'mysql:host=localhost;dbname=id4185618_test','id4185618_root','rootroot');

// var_dump($dbh);//ouvre la base de donnée

// // foreach ($dbh->query("SELECT * FROM utilisateur",PDO::FETCH_ASSOC) as $row){
// //     var_dump($row);//voir constante predefinies sur manualPHP(ici :  affiche array informations)
// //}

// $reqInsert = "INSERT INTO utilisateur(nom,prenom,age) VALUES (:nom, :prenom, :age) ";//requete d'insertion

// $stmt = $dbh->prepare($reqInsert);//preparer la requete

// $stmt->bindparam(":nom",$nom);//binder les parametres
// $stmt->bindparam(":prenom",$prenom);
// $stmt->bindParam(":age", $age);

// $nom = "toto";//premiere requete
// $prenom = "tata";
// $age = 20;

// $stmt->execute();//executer 


// $nom ="Picsou";//deuxieme requete 
// $prenom = "mickey";

// $age = "58";

// $stmt->execute();//executer



///////////////////////////////////////////////////////////////////////////
//FIN DU COURS SUR LES OBJETS
///////////////////////////////////////////////////////////////////////////
//Les exceptions
//*************** */
    // class Fraction{

    //     protected $numerateur;
    //     protected $denominateur;

    //     public function __construct($numerateur=0,$denominateur=0){
    //         $this->numerateur = $numerateur;
    //         $this->denominateur = $denominateur;

    //         if($this->denominateur == 0){
    //             throw new exception("Devider cannot be null");//fait une erreur donc faire un try(throw lance une erreur)
    //         }
    //     }
    //     public function __toString(){
    //         return $this->numerateur."/".$this->denominateur;
    //     }
        
    // }
    // try{//essayer de lancer la fonction, sinon catch)
    //     $fraction = new Fraction();
    // }catch(exception $e){
    //     echo "la fraction n'a pas été initialisée";
    // }
    // echo $fraction;
////////////////////////////////////////////////////////////////////////////////////////////////
//class d'exeption// 
//***************** */
class NullDividerException extends Exception{} //pour faire une class d'erreur mettre dans catch

    class Fraction{

        protected $numerateur;
        protected $denominateur;

        public function __construct($numerateur=0,$denominateur=0){
            $this->numerateur = $numerateur;
            $this->denominateur = $denominateur;

            if($this->denominateur == 0){
                throw new exception("Devider cannot be null");//fait une erreur donc faire un try(throw lance une erreur)
            }
        }
        public function __toString(){
            return $this->numerateur."/".$this->denominateur;
        }
        
    }
    try{//essayer de lancer la fonction, sinon catch)
        $fraction = new Fraction();
        echo $fraction; // si on met le echo en bas comme avant erreur:$fraction invalide
    }catch( NullDividerException $e){
        echo "la fraction n'a pas été initialisée";
    }catch(exception $e){ //on peut enchainer les catch
        echo $e->getmessage();
    }
?>