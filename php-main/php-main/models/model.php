<?php
include "data.php";


function getLesSignes(){
    $rqt = "SELECT * from astrologie";
    return executerRequete($rqt)->fetchAll();
}

function getLeSigne($choix){
    $rqt = "SELECT horoscope from astrologie where signe='$choix'";
    return executerRequete($rqt)->fetch();
}

function reconstruireTab(){
    $tab = getLesSignes();

    foreach($tab as $k){
        $tableau[$k["signe"]]=$k["horoscope"];
    }

    return $tableau;
}
