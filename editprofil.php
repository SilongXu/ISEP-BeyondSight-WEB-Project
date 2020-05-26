<!DOCTYPE html>
<html>

    <?php include "includes/header.php" ?>

    <body>
    	<!-- Menu Bar -->
    	<?php include "includes/menubar.php" ?>
        <!-- Bouton Search-->
        <?php include "includes/searchbar.php" ?>
        


      <div class="edit_profile_title">
          <h1>Éditer mon profil</h1>
      </div>


        <?php
        $servername = "localhost:3308";
        $username = "root";
        $password = "";
        $dbname = "beyondsight";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT nom,prenom,numeroDeTelephone FROM utilisateurs WHERE idUtilisateurs =".$_SESSION['idUtilisateur'];
        $result = $conn->query($sql);

        if($result){
            while($attr =$result->fetch_assoc()){?>

          <div class="contenu_page">
          <div class="edit profile_picture"><img src="https://i.imgur.com/zHrqg9q.png"></div>
          <div class="text"><h1>Email : <?php echo $_SESSION['email'];?></h1></div>
          <div class="bouton"><button class="favorite styled" type="button"> Modifier</button></div>

          <div class="text"><h1> <?php echo $attr["prenom"]; ?> </h1></div>
          <div class="text"><h1>N° de téléphone : <?php echo $attr["numeroDeTelephone"] ;?></h1></div>
          <div class="bouton"><button class="favorite styled" type="button"> Modifier</button></div>

          <div class="text"><h1><?php echo $attr["nom"];?></h1></div>
          <div class="text"><h1>Mot de passe : *******</h1></div>
          <div class="bouton"><button class="favorite styled" type="button"> Modifier</button></div>





        <?php
            }
        }
        $conn->close();
        
        ?>


    </body>
</html>

