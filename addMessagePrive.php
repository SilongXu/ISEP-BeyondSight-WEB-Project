<?php

    
    if(isset($_POST['formsend'])){
        usleep(100000);
        extract($_POST);
        include("filterAttacks.php");
        $idDestinataire = filterAttacks($idDestinataire, true, true);
        $texte = filterAttacks($texte, false, true);
        $objet = filterAttacks($objet, true, true);

       if (!empty($idDestinataire) && !empty($texte) && !empty($objet)) {

                        include 'includes/database.php';
                        global $db;


                        $q=$db->prepare("INSERT INTO messagesprives(idAuteur,idDestinataire,texte,objet) VALUES(:idAuteur,:idDestinataire,:texte,:objet)");
                        $q->execute([
                        'idAuteur'=>$_SESSION["idUtilisateur"],
                        'idDestinataire'=>$idDestinataire,
                        'texte'=>$texte,
                        'objet'=>$objet,
                    ]);
                }

    }else{
        echo "Les champs ne sont pas tous remplis";
    }
    
?>