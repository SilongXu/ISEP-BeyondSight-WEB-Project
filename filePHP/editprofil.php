<!DOCTYPE html>
<html>

    <?php include "includes/header.php" ?>

    <body>
    	<!-- Menu Bar -->
    	<?php include "includes/menubar.php" ?>
        <!-- Bouton Search-->
        <?php include "includes/searchbar.php" ?>
        <nav class = "menu_bar">
    		<div class = "left">
                <a href="accueil.php">
                    <div><img src="images/logo_blanc_sans_fleche.png" class = "chrono"></div>
                    <div><img src="images/logo_blanc_fleche2.png" class = "fleche"></div>
                </a>
			</div>
			<div class = "center">
                <div><a href="accueil.php">Accueil</a></div>
                <div><a href="forum.php">Forum</a></div>
                <div><a href="FAQ.php">FAQ</a></div>
                <div><a href="contact.php">Contact</a></div>
                
            </div>

			<div class = "right">
				<div><a href="edit_profil.php" class = "active" >User_name</a></div>
				<div><a href="accueil.php">Déconnexion</a></div>
			</div>
            <div class = "langues">
                <span>Fr</span>
                <div class = "not_choosen_language">
                    <ul>
                        <li><a href="">English</a></li>
                        <li><a href="">Chinese</a></li>
                    </ul>
                </div>
            </div>
    	</nav>

        <!-- Bouton Search-->
        <div class = "search-box">
            <input class="search-txt" type="text" name="" placeholder="Rechercher un utilisateur...">
            <a class="search-btn" href="#">
                <div><img src="images/loupe.png" class="loupe"></div>
            </a>
        </div>


      <div class="edit_profile_title">
          <h1>Éditer mon profil</h1>
      </div>

		<!-- Contenu -->
    	<div class="contenu_page">
          <div class="edit profile_picture"><img src="https://i.imgur.com/zHrqg9q.png"></div>
          <div class="edit email_donnee" >Email</div>
          <div class="edit email">candide@gmail.com</div> 
          <div class="edit bouton"><button class="favorite styled" type="button"> Modifier</button></div>

          <div class="edit nom" >Nom</div>
          <div class="edit telephone_donnee">N° de téléphone</div>
          <div class="edit telephone">0123456789</div>
          <div class="edit bouton"><button class="favorite styled" type="button"> Modifier</button></div>

          <div class="edit prenom">Prénom</div>
          <div class="edit mdp_donnee" >Mot de passe</div>
          <div class="edit mdp">*******</div>
          <div class="edit bouton"><button class="favorite styled" type="button"> Modifier</button></div>
    </body>
</html>





























       
    </body>
</html>