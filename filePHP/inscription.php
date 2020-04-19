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
                    <h2 class = "inscription_title">Inscription<h2/>
                </div>


                <div class = "form">

                    <form method = "post">
                        <label for="prenom">Prénom</label>

                    <form method = "post" action="accueil.php">
                        <label for="fname">Prénom</label>

                        <input class="champ" type="text" name="prenom" id="prenom" placeholder="Jean..." required>

                        <label for="nom">Nom</label>
                        <input class="champ" type="text" name="nom" id="nom" placeholder="Dupont..." required>

                        <label for="tel">Téléphone</label>
                        <input class="champ" type="text" name="tel" id="tel" placeholder="0601010101..." required>

                        <label for="email">Email</label>
                        <input class="champ" type="email" name="email" id="email" placeholder="monemail@gmail.com..." required>

                        <label for="password">Mot de passe</label>
                        <input class="champ" type="password" name="password" id="password" placeholder="1234..." required>

                        <label for="cpassword">Confirmer votre mot de passe</label>
                        <input class="champ" type="password" name="cpassword" id="cpassword" placeholder="1234..." required>
  
                        <input type="submit" name="formsend" id="formsend" value="Ok">
                    </form>
                </div>

                <?php  include 'includes/database.php"';
                        include 'includes/signin.php';
                ?>

		</div>
		
		
        <?php
            if(isset($_SESSION['signIn'])){
                header('location: '.'connexion.php');
                unset($_SESSION['signIn']);
                }

        ?>
        	if (isset($_POST['formsend'])) {
  				extract($_POST);

  				if (!empty($password) && !empty($cpassword) && !empty($tel) && !empty($email) && !empty($nom) && !empty($prenom) && ($tel<=699999999)) {
  					
  					if ($password == $cpassword) {
  						$options = ['cost' => 12,];
  					}

  					$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

  					include 'includes/database.php';
  					global $db;

  					$c = $db->prepare("SELECT email FROM utilisateurs WHERE email = :email");
  					$c->execute(['email' => $email]);
  					$result = $c->rowCount();

  					if ($result==0) {
  						echo 'Votre compte a été créé';

  						$q = $db->prepare("INSERT INTO utilisateurs(nom,prenom,email,password,tel,role) VALUES(:nom,:prenom,:email,:password,:tel,:role)"); //requete query
  						$q->execute([
  						'nom' => $nom,
  						'prenom' => $prenom,
  						'email' => $email,
  						'tel' => $tel,
  						'role' => 'Invité',
  						'password' => $hashpass
  						]);


  					}else{
  						echo 'Un email existe déjà';
  					}
  				}	
  				else{
  					echo "Les champs ne sont pas tous remplis";
  				}


        

    </body>
</html>