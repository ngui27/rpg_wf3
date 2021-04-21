<?php


/**
 * Créez une classe PHP qui représente une guilde
 * Une guilde est caractérisée par son nom, et les Personnages qui la composent
 * La seule action qu'une guilde peut "accomplir" c'est accueillir un nouveau joueur
 */

 class Guilde{
    public $nom;
    public $membre = array();


    public function accueille(Personnage $quelqu_un){
        if(!in_array($quelqu_un, $this->membre)){
            $this->membre[]=$quelqu_un;
            echo 'La guilde ' . $this->nom . ' est heureuse d\'accueillir le personnage ' . $quelqu_un->pseudo . '.';
        }else {
            echo $quelqu_un->pseudo.' est telement bete qu\'il a oublier qui fessait partie de la guilde '. $this->nom .'!';
        }

    }

