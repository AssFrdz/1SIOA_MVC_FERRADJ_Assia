<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/authentification.inc.php";

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"./?action=connexion","label"=>"Connexion");
$menuBurger[] = Array("url"=>"./?action=inscription","label"=>"Inscription");

// recuperation des donnees GET, POST, et SESSION
if (!isset($_POST["mailU"]) || !isset($_POST["mdpU"])){
    // on affiche le formulaire de connexion
    $titre = "authentification";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueAuthentification.php";
    include "$racine/vue/pied.html.php";
}
else
{
    // à completer
    //je récupère les données utilisateurs
    $mailU = $_POST["mailU"];
    $mdpU = $_POST["mdpU"];
    // je lance la fonction login
    login($mailU,$mdpU);
    // si la connexion est réussie :
    if (isLoggedOn()){
        include "$racine/vue/entete.html.php";
        include "$racine/vue/vueConfirmationAuth.php";
        include "$racine/vue/pied.html.php";
    }
    //sinon je renvoie vers la page de connexion
    else {
        include "$racine/vue/entete.html.php";
        include "$racine/vue/vueAuthentification.php";
        include "$racine/vue/pied.html.php";
    }
    
}

?>