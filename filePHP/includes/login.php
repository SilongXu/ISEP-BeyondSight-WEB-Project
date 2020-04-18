<?php
    
    if(isset($_POST['formlogin'])){
        extract($_POST);

        if(!empty($loginEmail) && !empty($loginPassword)){
            $q =$db->prepare("SELECT * FROM utilisateurs WHERE adressMail =:email");
            $q->execute(['email' => $loginEmail]);
            $result =$q->fetch();

            if($result ==true){
                $hashpassword = $result['motDePasse'];
                if(password_verify($MotDePasse,$result['motDePasse'])){
                    //Ajouter les sessions ici
                    
                    $_SESSION['email']=$result['email'];

                }else{
                    echo "le mot de passe n'est pas correcte";
                }
            }else{
                echo " Le compte portant l'eamil ". $loginEmail ."n'existe pas";
            }
        }
        else {
            echo "Veuillez compléter l'ensemble des champs";
        }
    }
?>