<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styles.css" />
        <title>Beyond Sight</title>
        <link rel="icon" href="images/favicon.ico" />
    </head>

    <body>
    	<!-- Menu Bar -->
    	<!--<div><img src="images/menu_icon.png" class = "icon_menu"></div>-->
    	<nav class = "menu_bar">
    		<div class = "left">
                <a href="accueil.html">
                    <div><img src="images/logo_blanc_sans_fleche.png" class = "chrono"></div>
                    <div><img src="images/logo_blanc_fleche2.png" class = "fleche"></div>
                </a>
			</div>
			<div class = "center">
                <div><a href="accueil.html">Accueil</a></div>
                <div><a href="forum.html">Forum</a></div>
                <div><a href="FAQ.html">FAQ</a></div>
                <div><a href="contact.html">Contact</a></div>
                
            </div>
			<div class = "right">
				<div><a href="connexion.html">Connexion</a></div>
				<div><a href="inscription.html" class = "active">Inscription</a></div>
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


        <div class="inscription_div_1">
                <div class="inscription_div_2">
                    <h2 class = "inscription_title">Inscription<h2/>
                </div>


                <div class = "form">
                    <form action="/action_page.php">
                        <label for="fname">Prénom</label>
                        <input class="champ" type="text" id="fname" name="firstname" placeholder="Jean...">

                        <label for="lname">Nom</label>
                        <input class="champ" type="text" id="lname" name="lastname" placeholder="Dupont...">

                        <label for="lname">Téléphone</label>
                        <input class="champ" type="text" id="" name="" placeholder="0601010101...">

                        <label for="lname">Email</label>
                        <input class="champ" type="email" id="" name="" placeholder="monemail@gmail.com...">

                        <label for="lname">Mot de passe</label>
                        <input class="champ" type="password" id="" name="" placeholder="1234...">

                        <label for="lname">Confirmer votre mot de passe</label>
                        <input class="champ" type="password" id="" name="" placeholder="1234...">
  
                        <input type="submit" value="Envoyer">
                    </form>
                </div>

        </div>



    </body>
</html>