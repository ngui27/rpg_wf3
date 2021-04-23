<?php
//Class abstract d'une monture des air

namespace Monture;

use Monture\Chaveuchable;

abstract class MontureAir implements Chaveuchable{
    public $vitesse_sur_terre;
    public $endurence;
    public $au_repos = false;
    public $vol = false;
    public $vitesse_en_vol;

    public function fuite(){
        
        echo $this->nomCanason .' s\'enfuit a tout vitesse only';
        
    }
    abstract public function attribut();
    abstract public function chavaucher();
    abstract public function seRopose();
    abstract public function sEnvole();
}