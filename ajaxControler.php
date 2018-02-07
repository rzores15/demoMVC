<?php

/**
 * Controlleur AJAX. Ce fichier est la porte d'entrée des requêtes AJAX (XHR)
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-03-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */

	require_once("./config.php");
	
	
	// Mettre ici le code de gestion de la requête AJAX
	switch($_GET['requete'])
    {
        case 'recherchearrond': 
            rechercherArrond();
            break;
        
    }


    function rechercherArrond()
    {
        $oElus= new Elus();
        $aElus = $oElus->rechercheElusArrond($_POST['arrond']);
        
        $oVue = new Vue();
        $oVue->AfficheElus($aElus);
    }
 //voici une commentaire
?>