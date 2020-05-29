<?php

    if(isset($_POST['formEdit'])){
        extract($_POST);

        if(!empty($firstname) && !empty($lastname) && !empty($telephone) && !empty($email) &&!empty($motDePasse) && !empty($conMotDePasse)){
            if($conMotDePasse==$motDePasse){
                $options =['cost' => 12,];
                $hashpass =password_hash($motDePasse,PASSWORD_BCRYPT,$options);
                $db=new PDO('mysql:host=localhost:3308;dbname=beyondsight','root','');

                $c = $db->prepare("SELECT email FROM utilisateurs WHERE email = :email AND idUtilisateurs != ".$_SESSION['idUtilisateur'].";");
                $c->execute(['email'=>$email]);
                
                if($c->rowCount()==0){

                    $envoi=$db->prepare("UPDATE utilisateurs SET nom= :lastname , prenom=:firstname,adresseMail=:email,motDePasse=:motDePasse,numeroDeTelephone=:telephone WHERE idUtilisateurs = ".$_SESSION['idUtilisateur'].";");
                    $envoi->execute(['lastname'=>$lastname , 
                        'firstname'=>$firstname,
                        'email'=>$email,
                        'motDePasse'=>$motDePasse,
                        'telephone'=>$telephone]);
                    $_SESSION['email']=$email;
                    $_SESSION['Edit']=$email;
                }else{
                    echo 'Le adress e-mail que tu utilise existe déjà';
                }

                
                
            }

        }else{
            echo "les champs ne sont pas tous remplies";
        }
    }
?>