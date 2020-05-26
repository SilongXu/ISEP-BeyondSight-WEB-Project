<?php

    
    if(isset($_POST['formsend'])){
        extract($_POST);

   if (!empty($idDestinataire) && !empty($texte) && !empty($objet)) {

                    include 'includes/database.php';
                    global $db;
                  

                    $q=$db->prepare("INSERT INTO messagesPrives(idAuteur,idDestinataire,texte,objet) VALUES(:idAuteur,:idDestinataire,:texte,:objet)");
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