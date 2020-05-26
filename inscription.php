<!DOCTYPE html>
<html>
    
    <?php include "includes/header.php" ?>

    <body>
      <!-- Menu Bar -->
      <?php include "includes/menubar.php" ?>
        <!-- Bouton Search-->
        <?php include "includes/searchbar.php" ?>


        <div class="inscription_div_1">
                <div class="inscription_div_2">
                    <h2 class = "inscription_title"><?php echo $lang['inscription_titre']?><h2/>
                </div>


                <div class = "form" >
                    <form method = "post" action="">
                        <label for="prenom"><?php echo $lang['inscription_prenom']?></label>
                        <input class="champ" type="text" name="prenom" id="prenom" placeholder="Jean..." onblur="verifPrenomNom(this)" required>

                        <label for="nom"><?php echo $lang['inscription_nom']?></label>
                        <input class="champ" type="text" name="nom" id="nom" placeholder="Dupont..." onblur="verifPrenomNom(this)" required>

                        <label for="tel"><?php echo $lang['inscription_telephone']?></label>
                        <input class="champ" type="text" name="tel" id="tel" placeholder="0601010101..." onblur="verifTel(this)" required>

                        <label for="email"><?php echo $lang['inscriptiont_email']?></label>
                        <input class="champ" type="email" name="email" id="email" placeholder="monemail@gmail.com..." onblur="verifMail(this)" required>

                        <label for="password"><?php echo $lang['inscription_mdp']?></label>
                        <input class="champ" type="password" name="password" id="password" placeholder="1234..." required>

                        <label for="cpassword"><?php echo $lang['inscription_cmdp']?></label>
                        <input class="champ" type="password" name="cpassword" id="cpassword" placeholder="1234..." required>
  
                        <button type="submit" name="formsend" id="formsend2" value="Ok"><?php echo $lang['inscription_envoyer']?></button>
                    </form>
                </div>


                

                <?php  include 'includes/database.php';


                        global $db;
                        if(isset($_POST['formsend'])){
                           extract($_POST);

                           if(!empty($prenom) && !empty($nom) && !empty($tel) && !empty($email) &&!empty($password) && !empty($cpassword) ){
                              if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                                    if($cpassword==$password){
                                       $options =['cost' => 12];
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
                                          //Sans Densifier le mot de passe
                                          //'motDePasse=>$hashpass',
                                          'motDePasse'=>$password,
                                          'numeroDeTelephone'=>$tel
                                          ]);

                                          
                                          $_SESSION['signIn']=$email;

                                       }else{
                                          echo 'Cette adresse email existe déjà';
                                       } 
                                       
                                    }else{
                                       echo 'Le mot de passe sont pas même';
                                    }

                              }else{
                                    echo 'Le format dadresse email est pas correct';
                              }
                              
                              

                           }else{
                              echo "Les champs ne sont pas tous remplis";
                           }
                        }

               
               ?>
    
    
        <?php
            if(isset($_SESSION['signIn'])){
                header('location: '.'connexion.php');
                unset($_SESSION['signIn']);
            }
        ?>


          <?php include "includes/footer.php" ?>

    </body>
</html>
