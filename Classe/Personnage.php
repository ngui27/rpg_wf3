<?php
// require_once "Cheval.php";
// require_once "Guilde.php";
// require_once "classe_heritage/Archer.php";
// require_once "classe_heritage/Paladin.php";
// require_once "classe_heritage/Mage.php";


namespace Classe;
use Monture\Cheval;
use Assemblait\Guilde;

class Personnage{

    public $pseudo;
    public $pdv= 1000;
    public $force= 60;
    public $agile= 40;
    public $intel = 60;
    public $vitesse = 60;
    // public $folie;
    public $vivant = true;
    public $arme = false;
    public $bouclier = false;

    public function __construct(string $pseudo_new ){
        $this->pseudo = $pseudo_new;
    }

    public function frapper(Personnage $victime){
       if($victime->vivant){
        $degats = round(($this->force + $this->vitesse)-($this->intel/2));
        $victime->degatsSubie($degats);
        if (!$victime->vivant) {
            echo $this->pseudo." a porter un coup fatal à $victime";
        }
       }
        
        
    }

    public function degatsSubie(int $degats){
        $this->pdv -= $degats;
        if ($this->pdv <=0) {
         $this->vivant =false;
        }
    }

    public function chavaucher_un_cheval(Cheval $monture){

        echo $this->pseudo. 'chevauche son Canason!!';
        $monture->chavaucher();
    
    }

    public function rentreDans(Guilde $guilde) {
        $guilde->accueille($this);
        $this->guilde = $guilde;
    }
}









