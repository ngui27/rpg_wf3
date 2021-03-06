<?php

/**
 * Définissez une classe abstraite qui représente une monture.
 * 
 * Une monture est définie par des points de vie, une endurance et une vitesse.
 * Une monture est chevauchable.
 * 
 * Faites en sorte que le Cheval (cf. partie 1) soit une monture.
 * Créez deux autres montures.
 */

namespace Monture;

use Monture\Chaveuchable;


abstract class MontureTerreste implements Chaveuchable{
    public $vitesse;
    public $endurance;
    public $au_repos = false;

    abstract public function __construct(string $nomCanason);
      
    public function fuite(){
        
        echo $this->nomCanason .' s\'enfuit a tout vitesse only';
        
    }
    abstract public function attribut();
    abstract public function seRepose();
    
    abstract public function chavaucher();

}