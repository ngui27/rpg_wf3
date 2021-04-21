<?php

/**
 * La classe PHP qui représente un cheval
 * 
 * Un cheval est caractérisé par sa vitesse et son endurance
 * Les actions d'un cheval se résument à :
 * 		- Galoper
 * 		- Prendre la fuite (les lâches)
 *      - Chevaucher
 */

 class Cheval{
    public $nomCanason;
    public $vitesse;
    public $endurance;
    public $au_repos = false;

    public function galoper(){

        if ($this->endurance <=1) {
            echo $this->nomCanason. 'est epuisé !!' ;
        }else {

            echo 'Cours ' .$this->nomCanason.' !';
            $vitesse_reelle = round($this->vitesse * $this->endurance/100);
            $this->endurance-= 5;
            echo $this->nomCanason.'cours a '.$vitesse_reelle. 'km/h !';
        }
        
        
        
    }

    public function fuite(){
        
        echo $this->nomCanason .' s\'enfuit a tout vitesse only';
        
    }

    public function chavaucher(){
        $this->au_repos = false;
        $de_100 = rand(1, 100);

        if ($de_100 <= 2){
            $this->fuite();
        }else{
            $this->galoper(); 
        }

    }

    public function seRepose(){
       
        $this->au_repos = true;
        $this->endurence += 10;

        echo $this->nomCanason.' se repose !';
    }

 }
