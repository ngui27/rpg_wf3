<?php
require_once "Cheval.php";
require_once "Guilde.php";
require_once "classe_heritage/Archer.php";
require_once "classe_heritage/Paladin.php";
require_once "classe_heritage/Mage.php";

/**
 * Créez une classe PHP qui représente un personnage de jeu vidéo (type RPG)
 * Un personnage est caractérisé par un pseudo, des points de vie, sa force 
 * (ainsi que tous les points de caractéristique que vous voudrez)
 * 
 * Les actions d'un personnage consistent en : 
 * 		- Frapper (infliger des dégats à un autre personnage en fonction de sa force)
 * 		- Chevaucher un Cheval (ce qui appelle la méthode chevauche de la classe Cheval)
 */

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

    public function chavaucher_un_cheval(Cheval $nomCanason){

        echo $this->pseudo. 'chevauche son Canason!!';
        $nomCanason->chavaucher();
    
    }

    public function rentreDans(Guilde $guilde) {
        $guilde->accueille($this);
        $this->guilde = $guilde;
    }
}


$merlin = new Mage("Merlin");
$merlin->mageAttribue();

print "<pre>";
    print_r($merlin);
print "</pre>";

$robinOfTheHood = new Archer("Robin des bois","Arc");

print "<pre>";
    print_r($robinOfTheHood);
print "</pre>";

$arthur = new Paladin("Arthur", "Excalibur", "Hulk");
print "<pre>";
    print_r($arthur);
print "</pre>";






