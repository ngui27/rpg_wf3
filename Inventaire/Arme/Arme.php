<?php

/**
 * Créez une classe PHP qui représente une arme (générique)
 * 
 * Une arme est définie par les dégats qu'elle peut infliger
 * 
 * La seule action de cette classe est statique : attaquer un personnage
 * Une attaque inflige le montant de dégats (défini dans la classe) à un personnage
 * 
 * Créez 3 armes distinctes
 */

namespace Inventair\Arme;

use Classe\Personnage;

class Arme{
    protected $vitesse_attaque;
    protected $degats_arme;
    protected $agile_supp;
    protected $pdv_supp;

    
    
    static public function attaque(Personnage $victime){
        if ($victime->vivant) {
        $degats = round($this->degats_arme + $victime->force + $victime->vitesse* 0.1);

        $victime->degatsSubie($degats);
        if (!$victime->vivant) {
            echo Personnage::$pseudo. " a porter un coup fatal a $victime";
        }
        }
    }
    

}

