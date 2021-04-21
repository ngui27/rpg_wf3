<?php
require_once "Cheval.php";
require_once "Guilde.php";

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
    public $pdv;
    public $force;
    public $agile;
    public $intel;
    public $vitesse;
    public $magie;
    public $folie;
    public $vivant = true;
    public $arme = false;
    public $bouclier = false;

    public function __construct(string $pseudo_new ){
        $this->pseudo = $pseudo_new;
    }

    public function frapper(Personnage $victime){
       if($victime->vivant){
        $degats = round(($this->force + $this->agile)/($this->intel/2));
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




