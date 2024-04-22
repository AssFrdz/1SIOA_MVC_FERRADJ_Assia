<?php
include "getRacine.php";
include "controleur/controleurPrincipal.php";

if (isset($_GET["action"])){
    $action = $_GET["action"];
}
else{
    
    $action = "defaut";
}

$fichier = controleurPrincipal($action);
echo "Contenu de \$fichier : $fichier";
echo "<br>";
include "controleur/$fichier";


?>
     