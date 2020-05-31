<?php

    
    if(isset($_POST['formsend'])){
        usleep(100000);
        extract($_POST);
        include("filterAttacks.php");
        $capteur = filterAttacks($capteur, true, true);
        $test = filterAttacks($test, true, true);

   if (!empty($capteur) && !empty($test)) {

                    include 'includes/database.php';
                    global $db;
                  

                    $q=$db->prepare("INSERT INTO tests(capteur,test) VALUES(:capteur,:test)");
                    $q->execute([
                    'capteur'=>$capteur,
                    'test'=>$test,
                ]);
            }

        }else{
            echo "Les champs ne sont pas tous remplis";
        }
    
?>