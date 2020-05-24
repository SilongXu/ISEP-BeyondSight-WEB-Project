<!DOCTYPE html>
<html>
    
    <?php include "includes/header.php" ?>

    <body>
        <!-- Menu Bar -->
        <?php include "includes/menubar.php" ?>
        <!-- Bouton Search-->
        <?php include "includes/searchbar.php" ?>


        <div id="bgConnexion">
            <div id="titleConnexion">
                <h2 id= "h2Connexion"><?php echo $lang['connexion_titre']?><h2/>
            </div>
        </div>

        <div class="frameConnexion">
            <form method="post" action="">
                <label for="lname"><?php echo $lang['connexion_email']?></label>
                <input class="champ" type="email" name="loginEmail" id="email" placeholder="monemail@gmail.com..." required>

                <label for="lname"><?php echo $lang['connexion_mdp']?></label>
                <input class="champ" type="password" name="loginPassword" id="password" placeholder="1234..." required>

                <input type="submit" name="formlogin" id="formlogin" value="Login">
            </form>
        </div>

        <?php  include 'includes/database.php';
               


               global $db;
               if(isset($_POST['formlogin'])){
                   extract($_POST);
           
                   if(!empty($loginEmail) && !empty($loginPassword)){
                       $q =$db->prepare("SELECT * FROM utilisateurs WHERE adresseMail = :email");
                       $q->execute(['email' => $loginEmail]);
                       $result =$q->fetch();


                       if($result ==true){
                            $_SESSION['email']=$loginEmail;
                            $_SESSION['idUtilisateur']=$result['idUtilisateurs'];
                           //$hashpassword = $result['motDePasse'];
                           if(password_verify($loginPassword,$result['motDePasse'])){
                               //Ajouter les sessions ici

                               
                               
                               echo 'Connection en cours';
           
                           }else{
                               echo "Le mot de passe n'est pas correct";
                           }
                       }else{
                           echo "Le compte portant l'email ". $loginEmail ."n'existe pas";
                       }
                   }
                   else {
                       echo "Veuillez compléter l'ensemble des champs";
                   }
               }

        ?>

        <?php
            if(isset($_SESSION['email'])){
                header('location: '.'ComptePrive.php');
            }
        ?>


        <?php include "includes/footer.php" ?>
    </body>
</html>
