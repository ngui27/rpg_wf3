<?php

//Class MontureAir Griffon

namespace Monture;

use Monture\MontureAir;

class Griffon extends MontureAir{
    
     public function __construct(string $nomCanason){
          $this->nomCanason = $nomCanason;
          $this->attribut();
     }

     public function attribut(){
         $this->vitesse_sur_terre *= 0.8;
         $this->endurence = 1;
         $this->vitesse_en_vol = 1.3;
     }

     public function chavaucher(){
          $this->au_repos = false;
        $de_100 = rand(1, 100);

        if ($de_100 <= 2){
            $this->fuite();
        }else{
            $this->sEnvole(); 
        }
     }
     
     public function sEnvole(){
          if($this->endurence<=1){
               echo $this->nomCanason.' est epuisé !!';
          }else {
               $this->vol = true;
               echo 'Vol '.$this->nomCanason. '!';
               $vitesse_reelle= round($this->vitesse_en_vol * $this->endurence/100);
               $this->endurence -= 5;
               echo $this->nomCanason.'vol a  '.$vitesse_reelle. 'km/h !';
          }
     }

     public function seRopose(){
          $this->au_repos = true;
          $this->endurence += 10;
  
          echo $this->nomCanason.' se repose !';
     }
}