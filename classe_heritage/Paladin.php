<?php
require_once "../Personnage.php";
require_once "Arme.php";

//definir la class paladin

class Paladin extends Personnage{

    public $type_epee;
    public $type_bouclier;

    public function __construct(string $pseudo_new, string $type_epee, string $type_bouclier){

        $this->pseudo = $pseudo_new;
        $this->type_epee = $type_epee;
        $this->type_bouclier = $type_bouclier;
        
    }

    //definir les attribut d'un paladin
    public function attributPaladin(){
        $this->pdv *= 1.2;
        $this->force *= 1.5 ;
        $this->agile *= 0.4;
        $this->vitesse *= 0.8;
    }

    //Prend bouclier
    





}
/**
 * Définissez la classe Paladin, qui est un genre de Personnage
 * prend bouclier
 * prend epee
 * contre degat
 * mettre degat avec epee
 */
