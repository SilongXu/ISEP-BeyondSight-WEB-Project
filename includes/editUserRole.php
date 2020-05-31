<?php

        usleep(100000);
        extract($_POST);
        include("filterAttacks.php");
        $role = filterAttacks($role, true, true);
        $idUser = filterAttacks($idUser, true, true);
        $db=new PDO('mysql:host=localhost:3308;dbname=beyondsight','root','');
        $envoi=$db->prepare("UPDATE utilisateurs SET role=:role WHERE idUtilisateurs = :idUtilisateur;");
                    $envoi->execute(['role'=>$role , 
                        'idUtilisateur'=>$idUser,]);
    
?>