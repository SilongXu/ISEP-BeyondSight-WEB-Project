<?php

    
    global $db;
    if(isset($_POST['formsend'])){
        extract($_POST);

        if(!empty($prenom) && !empty($nom) && !empty($tel) && !empty($email) &&!empty($password) && !empty($cpassword) ){
            if($cpassword==$password){
                $options =['cost' => 12,];
                $hashpass =password_hash($password,PASSWORD_BCRYPT,$options);
                

                $c = $db->prepare("SELECT adresseMail FROM utilisateurs WHERE adresseMail = :email");

    session_start();
    if(isset($_POST['formsend'])){
        extract($_POST);

        if(!empty($prenom) && !empty($nom) $$ !empty($tel) && !empty($email) &&!empty($password) && !empty($cpassword) && ($tel<=699999999)){
            if($cpassword==$password){
                $options =['cost' => 12,];
                $hashpass =password_hash($motDePasse,PASSWORD_BCRYPT,$options);
                global $db;

                $c = $db->prepare("SELECT email FROM utilisateurs WHERE email = :email");

  				$c->execute(['email' => $email]);
                $result = $c->rowCount();
                  
                if(result==0){
                    $q=$db->prepare("INSERT INTO utilisateurs(prenom,nom,adresseMail,motDePasse,numeroDeTelephone) VALUES(:prenom,:nom,:adresseMail,:motDePasse,:numeroDeTelephone)");
                    $q->execute([
                    'prenom'=>$prenom,
                    'nom'=>$nom,
                    'adresseMail'=>$email,
                    
                    'motDePasse'=>$password,
                    'numeroDeTelephone'=>$tel
                    $q=$db->prepare("INSERT INTO utilisateurs(prenom,nom,adressMail,motDePasse,numeroDeTelephone) VALUES(:prenom,:nom,:adressMail,:motDePasse,:numeroDeTelephone)");
                    $q->execute([
                    'prenom'=>$prenom,
                    'nom'=>$nom,
                    'adressMail'=>$email,
                    'motDePasse'=>$password,
                    'numeroDeTelephone'=>$tel;

                    ]);
                    $_SESSION['signIn']=$email;

                }else{
                    echo 'Cette email exise déjà';
                } 
                
            }

        }else{
            echo "les champs ne sont pas tous remplies";
        }
    }
?>