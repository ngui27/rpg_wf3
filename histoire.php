<?php

/**
 * "Il était une fois..."
 * 
 * A l'aide des différentes classes que vous allez écrire tout au long du module
 * construisez une histoire.
 * 
 * Cette histoire ne devra s'écrire sans aucun appel à echo, print, ... dans ce fichier
 * 
 * Faites évoluer cette histoire au fur et à mesure que le module avance.
 * 
 * (On n'est pas à une faute de français près. 
 * Il se peut que tout ne s'accorde pas exactement comme voulu, ce n'est pas très grave...
 * Mais essayez de faire au mieux =p)
 */

function chercherFichierParFQCN($fqcn) {
  
    $tableau = explode('\\', $fqcn);     
    $fichier = implode('/', $tableau) . '.php'; 
    require_once $fichier;
}
spl_autoload_register('chercherFichierParFQCN');

use Classe\Personnage;
use Classe_heritage\Archer;
use Classe_heritage\Mage;
use Classe_heritage\Paladin;


$merlin = new Mage("Merlin");
$merlin->mageAttribue();

print "<pre>";
    print_r($merlin);
// print "</pre>";

$robinOfTheHood = new Archer("Robin des bois","Arc");

print "<pre>";
    print_r($robinOfTheHood);
print "</pre>";

$arthur = new Paladin("Arthur", "Excalibur", "Hulk");
print "<pre>";
    print_r($arthur);
print "</pre>";