<?php
    session_start();
    if(isset($_POST['formEdit'])){
        extract($_POST);

        if(!empty($firstname) && !empty($lastname) $$ !empty($telephone) && !empty($email) &&!empty($motDePasse) && !empty($conMotDePasse)){
            if($conMotDePasse==$motDePasse){
                $options =['cost' => 12,];
                $hashpass =password_hash($motDePasse,PASSWORD_BCRYPT,$options);

                global $db;

                $c = $db->prepare("SELECT email FROM utilisateurs WHERE email = :email");
  				$c->execute(['email' => $email]);
                $result = $c->rowCount();

                if($result==0){
                    $q=$db->prepare("UPDATE utilisateurs SET nom=".$lastname.",prenom=".$firstname.",adresseMail=".$email.",motDePasse=".$motDePasse.",numeroDeTelephone=".$telephone.", WHERE adresseMail=".$_SESSION['email']);
                    $q->execute();
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