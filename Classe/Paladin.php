<?php
// require_once "../Personnage.php";
// require_once "Arme.php";

//definir la class paladin
namespace Classe;

use Classe\Personnage;

class Paladin extends Personnage{

    public $nom_epee;
    public $nom_bouclier;
    public $tank = 0;

    public function __construct(string $pseudo_new ,string $nom_epee, string $nom_bouclier){
        $this->pseudo = $pseudo_new;
        $this->nom_epee = $nom_epee;
        $this->nom_bouclier = $nom_bouclier;
        $this->attributPaladin();
        $this->prendBoubou();
        $this->prendCoupcoup();
        
    }

    //definir les attribut d'un paladin
    public function attributPaladin(){
        $this->pdv *= 3;
        $this->force *= 1.5 ;
        $this->agile *= 0.5;
        $this->vitesse *= 0.8;
    }

    //Prend bouclier
    
    public function prendBoubou(){
        
        $this->bouclier = true;
        echo $this->pseudo.' s\'equipe de sont fidel Bouclier le '.$this->nom_bouclier.'!!.<br>';
        $this->tank = 50 ; 
    }

    //prend epee
    public function prendCoupcoup(){
        $this->arme = true;
        echo $this->pseudo.' s\'equipe de sa fidel arme  '.$this->nom_epee.'!!.';

    }
    
    //Tanker les degat
    public function degatsSubie(int $degats){
       
        if ($this->tank <=0 ) {
            $this->pdv -= $degats;
                if ($this->pdv <=0) {

                $this->vivant =false;

                }
        }else{
            $this->tank -= $degats;
        }
    }

    //degat de l'arme
    public function degatArme(){
        $degatArme = rand(1,20);
        return $degatArme;
    }
    
    //Coup d'epée
    public function CoupEpee(Personnage $victime){
        if($victime->vivant){
            $degats = round(($this->force +$this->vitesse)-($this->intel/2))+$this->degatArme();
            $victime->degatsSubie($degats);
                if (!$victime->vivant) {
                    echo $this->pseudo." a tranchè en deux $victime";
                }
        }


    }


}
/**
 * Définissez la classe Paladin, qui est un genre de Personnage
 * prend bouclier
 * prend epee
 * contre degat
 * mettre degat avec epee
 */


