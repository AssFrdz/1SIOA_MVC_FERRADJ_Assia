<?php

    switch ($action)
    {
        case 'reponse':
            {
                $choix = $_REQUEST['liste'];
                include "./views/reponse.php";
                break;
            }

        case 'connexion':
            {
                $user = $_REQUEST['user'];
                $mdp = $_REQUEST['mdp'];
                $flag = getConnexion($user,$mdp);
                
                if ($flag['nb']>0)
                {
                    $tableau = reconstruireTab();
                    include "./views/choix.php";
                    
                }
                else
                {
                    include "./views/connexion.php";
                }
                break;
            }
            

        case 'admin':
            {
                include "./views/admin.php";
                break;
            }

        case 'administrer':
            {
                $tableau = reconstruireTab();
                foreach($_REQUEST as $cle => $valeur)
                {
                    $tableau[$cle] = $valeur;
                }
                include "./views/choix.php";
                break;
            } 

        default:
        {
            include "./views/connexion.php";
            connexion();
            break;
        }

    }


       




    


    


    



