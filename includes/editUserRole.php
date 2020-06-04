<?php

if (isset($_POST)) {
        usleep(100000);
        extract($_POST);
        if ($idUser!=-1) {
        $db=new PDO('mysql:host=localhost:3308;dbname=beyondsight','root','');
        $envoi=$db->prepare("UPDATE utilisateurs SET role=:role WHERE idUtilisateurs = :idUtilisateur;");
                    $envoi->execute(['role'=>$role,
                        'idUtilisateur'=>$idUser]);
        }
        unset($_POST);
}
?>