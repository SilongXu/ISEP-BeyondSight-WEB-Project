<<<<<<< HEAD
<?php session_start();
    error_reporting(0);
?>
=======
<?php session_start();?>
>>>>>>> master
<!DOCTYPE html>
<html>

<body>
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

        <?php
                
                if(!isset($_SESSION['email'])){
                ?>

                    <div class = "right">
				        <div><a href="connexion.php" >Connexion</a></div>
				        <div><a href="inscription.php" >Inscription</a></div>
			        </div>

                <?php
                }elseif(isset($_SESSION['email'])){
                ?>
                <div class = "right">
				    <div><a href="ComptePrive.php" >Profil</a></div>
                    <div><a href="accueil.php" >Se Déconnecter</a></div>
                </div>
                <?php
                }
        ?>

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
</body>
</html>
