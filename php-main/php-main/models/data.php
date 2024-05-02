<?php 

/*function signe(){
$signe=array(
"belier" => "Vous devrez faire les efforts les plus sérieux pour acquérir un bon niveau",
"taureau" => "Une de vos plus grandes qualités est la capacité à saisir les théories",// jet brains
"gemeaux" => "De temps à autre, admettez que vous nêtes pas le seul à raisonner avec logique.",
"cancer" => "la rapidité de votre intelligence risque de vous entraîner à négliger certains détails.",
"lion" => "Un effort vers la patience et la perséverance sera pour vous grandement payant",
"vierge" => "Faites leffort de vous concentrer.",
"balance" => "Vous avez une forte tendance à choisir les solutions astucieuses",
"scorpion" => "Renoncer à imposer vos propres idées et appliquer les méthodes apprises",
"sagittaire" => "Pardonnez avec aisance et sans ambiguité, mais nacceptez aucun extrême.",
"capricorne" => "Une certaine facilité ne doit pas vous détourner de lobjectif",
"verseau" => "ce travail vous demandera beaucoup dingéniosite ",
"poissons" => "Votres esprit vif et limpide facilite la résolution de problèmes"
);
return $signe;
}

*/


function connexion(){
    $serveur='mysql:host=localhost';
    $bdd='dbname=horoscope';
    $user='root';
    $mdp="";
    try{
        $db = new PDO($serveur.';'. $bdd, $user, $mdp);
        $db->query("SET CHARACTER SET utf8");
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        return $db;
    } catch (Exception $e) {
        echo "Impossible de se connecter à la base de données";
        echo $e->getMessage();
        die();
    }
}


function executerRequete($sql, $params=null) {
    if ($params==null){
    $resultat = connexion()->query($sql);
    }
    return $resultat;
}


function getConnexion($login, $mdp){
    $sql = "SELECT COUNT(*) as nb FROM connexion WHERE login='$login' and mdp='$mdp'";
    var_dump($sql);
    return executerRequete($sql)->fetch();
    // on recherche si il y a une ligne dans la base de données qui contient le mdp et login en question;
    //si il y en a 1 -> on peut établir la connexion
}


