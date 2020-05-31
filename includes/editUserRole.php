<?php

        extract($_POST);
        $db=new PDO('mysql:host=localhost:3308;dbname=beyondsight','root','');
        $envoi=$db->prepare("UPDATE utilisateurs SET role=:role WHERE idUtilisateurs = :idUtilisateur;");
                    $envoi->execute(['role'=>$role , 
                        'idUtilisateur'=>$idUser,]);
    
?>