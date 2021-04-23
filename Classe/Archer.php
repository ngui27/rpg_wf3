<?php



namespace Classe;

use Classe\Personnage;


class Archer extends Personnage{
   
    public $armeDistance;

    public function __construct(string $pseudo_new, string $armeDistance ){

        $this->pseudo = $pseudo_new;
        $this->armeDistance = $armeDistance;
        $this->archerAttribue();
        $this->prendArme();
        
    }

    
    //modifier attribue archer
    public function archerAttribue(){
        $this->pdv *= 1.5;
        $this->force /= 1.5 ;
        $this->agile *= 1.5;
        $this->vitesse *= 1.3;
    }

    //prendre une arme
    public function prendArme(){
       
        $this->arme = true;

        echo $this->pseudo.' prend sont '.$this->armeDistance.'!!.';
    }
    

    //tirer et toucher
    public function tirer(Personnage $victime){
        $de_100 = rand(1,100);
        if ($de_100%2 ==1) {

            echo $this->pseudo .' a toucher sa cible.';
           $this->degatVictime($victime);
           if (!$victime->vivant) {
            echo $this->pseudo." a porter un coup fatal à $victime";
        }
           

        }else{
            echo $this->pseudo .' a fait mouche!!! BOUH.';
        }
    }

    //degat arme 
    public function degatArme(){
        $degatArme = rand(1,20);
        return $degatArme;
        //trouver comment faire pour avoir un rapport avec les metre parcourue
    }

    //degat victime toucher
    public function degatVictime(Personnage $victime){
        if ($victime->vivant) {
            $degats = round(($this->force + $this->agile)/($this->intel/2))+ $this->degatArme();
            $victime->degatsSubie($degats);

        }
    }


    
}


/**
 * Définissez la classe Archer, qui est un genre de Personnage
 * 
 * prend un arc 
 * tire fleche
 * toucher
 * degat
 * 
 */
