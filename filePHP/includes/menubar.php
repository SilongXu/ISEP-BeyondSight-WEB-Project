<?php //session_start();
    //error_reporting(0);
    include "config.php";
?>
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
            <div><a id ="" href="accueil.php"><?php echo $lang['accueil']?></a></div>
            <div><a id ="" href="forum.php"><?php echo $lang['forum']?></a></div>
            <div><a id ="" href="FAQ.php"><?php echo $lang['faq']?></a></div>
            <div><a id ="" href="contact.php"><?php echo $lang['contact']?></a></div>        
        </div>

        <?php
                
                if(!isset($_SESSION['email'])){
                ?>

                    <div class = "right">
                        <div><a id ="" href="connexion.php" ><?php echo $lang['connexion']?></a></div>
                        <div><a id ="" href="inscription.php" ><?php echo $lang['inscription']?></a></div>
                    </div>

                <?php
                }elseif(isset($_SESSION['email'])){
                ?>
                <div class = "right">
                    <div><a id ="" href="ComptePrive.php" >Profil</a></div>
                    <div><a id ="" href="accueil.php" >Se Déconnecter</a></div>
                </div>
                <?php
                }
        ?>

        <div class = "langues">
            <span>Langues</span>
            <div class = "not_choosen_language">
                <ul>
                    <li><a href="accueil.php?lang=fr" ><?php echo $lang['français']?></a></li>
                    <li><a href="accueil.php?lang=en" ><?php echo $lang['anglais']?></a></li>
                    <li><a href="" ><?php echo $lang['chinois']?></a></li>
                </ul>
            </div>
        </div>



    </nav>
</body>
</html>
