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

		<!-- Contenu -->
    	<div class="contenu_page">
          <div class="edit profile_picture"><img src="https://i.imgur.com/zHrqg9q.png"></div>
          <div class="text"><h1>Email : <?php echo $_SESSION['email'];?></h1></div>
          <div class="bouton"><button class="favorite styled" type="button"> Modifier</button></div>

          <div class="text"><h1>Maxime</h1></div>
          <div class="text"><h1>N° de téléphone : 060147896523</h1></div>
          <div class="bouton"><button class="favorite styled" type="button"> Modifier</button></div>

          <div class="text"><h1>Rosina</h1></div>
          <div class="text"><h1>Mot de passe : *******</h1></div>
          <div class="bouton"><button class="favorite styled" type="button"> Modifier</button></div>
    </body>
</html>

