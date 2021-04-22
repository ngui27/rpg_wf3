<?php

// require_once "../Personnage.php";

//Creation de la class
class Mage extends Personnage{
    
    public $magic= 60;
    public $sagesse;

    //construct mage
    public function __construct(string $pseudo_new ){
        $this->pseudo = $pseudo_new;
        $this->initSagese();
    }

    //init sagese
    public function initSagese(){
        $this->sagesse = rand(1,10);
    }

    //attribut mage
    public function mageAttribue(){
        $this->pdv *= 0.8;
        $this->force /= 2 ;
        $this->intel *= 2;
    }

    //lancer un sort
    public function sort(Personnage $victime){
        if ($victime->vivant) {
            $degats = round($this->magic + $this->intel+ $this->sagesse);
            $victime->degatsSubie($degats);
            if (!$victime->vivant) {
                echo "Le sort de ".$this->pseudo." été fatal à $victime";
            }
        }
    }

}
/**
 * Définissez la classe Mage, qui est un genre de Personnage
 * lancer un sort 
 */

