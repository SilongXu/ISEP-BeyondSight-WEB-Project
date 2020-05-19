<?php
    
    global $db;
    if(isset($_POST['formsend'])){
        extract($_POST);

        if(!empty($prenom) && !empty($nom) && !empty($tel) && !empty($email) &&!empty($password) && !empty($cpassword) ){
            if($cpassword==$password){
                $options =['cost' => 12,];
                $hashpass =password_hash($password,PASSWORD_BCRYPT,$options);
                

                $c = $db->prepare("SELECT adresseMail FROM utilisateurs WHERE adresseMail = :email");
                $c->execute(['email' => $email]);
                $result = $c->rowCount();
                  
                if($result==0){
                    
                    $q=$db->prepare("INSERT INTO utilisateurs(prenom,nom,adresseMail,motDePasse,numeroDeTelephone) VALUES(:prenom,:nom,:adresseMail,:motDePasse,:numeroDeTelephone)");
                    $q->execute([
                    'prenom'=>$prenom,
                    'nom'=>$nom,
                    'adresseMail'=>$email,
                    
                    'motDePasse'=>$hashpass,
                    'numeroDeTelephone'=>$tel
                    ]);
                    $_SESSION['signIn']=$email;

                }else{
                    echo 'Cette adresse email existe déjà';
                } 
                
            }

        }else{
            echo "Les champs ne sont pas tous remplis";
        }
    }
?>