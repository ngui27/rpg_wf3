<?php

/**
 * Définissez le "contrat" Chevauchable, 
 * qui stipule qu'une classe qui l'implémente doit implémenter la méthode chevaucher()
 * 
 * Implémentez ce contrat sur la classe Cheval (cf. partie 1)
 */
namespace Monture;

//creation d'une interface chaveuchable
interface Chaveuchable{
    public function chavaucher();
    public function fuite();
}