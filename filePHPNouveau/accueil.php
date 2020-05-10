

<!DOCTYPE html>
<html >

    <?php include "includes/header.php" ?>

    <body>
    	<!-- Menu Bar -->
    	<?php include "includes/menubar.php" ?>
        <!-- Bouton Search-->
        <?php include "includes/searchbar.php" ?>

        <div class="main">

        	<!-- accueil Page 1 -->
        	<div class = "accueil_div_1">
    	    	<h1 class = "bs_title">InfiniteMeasures</h1>
    	    	<h2 class = "bs_subtitle"><?php echo $lang['accueil_sousTitre']?></h2>
        	</div>


            <!-- accueil Page 1.2 -->
            <div class="accueil_div_12">
                <h1><?php echo $lang['accueil_sousTitre']?></h1>
                <div id ="case1" class="column">
                    <h2 ><?php echo $lang['accueil_unBoitier']?></h2>
                </div>
                <div id ="case2" class="column">
                    <h2><?php echo $lang['accueil_desTests']?></h2>
                </div>
                <div id ="case3" class="column">
                    <h2><?php echo $lang['accueil_plateforme']?></h2>
                </div>
                <div id ="case1" class="column">
                    <h3><?php echo $lang['accueil_revolutionnaire']?></h3>
                </div>
                <div id ="case2" class="column">
                    <h3><?php echo $lang['accueil_scientifiquement']?></h3>
                </div>
                <div id ="case3" class="column">
                    <h3><?php echo $lang['accueil_simpleLudique']?></h3>
                </div>
            </div>

            <div class="accueil_div_13"></div>


        	<!-- accueil Page 2 -->
            <div class="accueil_div_2">
                <h1><?php echo $lang['accueil_utilisateurs']?></h1>
                <div class="column">
                    <h2><?php echo $lang['accueil_15_1']?></h2>
                </div>
                <div class="column">
                    <h2><?php echo $lang['accueil_70']?></h2>
                </div>
                <div class="column">
                    <h2><?php echo $lang['accueil_15_2']?></h2>
                </div>
                <div class="column">
                    <h1><?php echo $lang['accueil_pilotes']?></h1>
                </div>
                <div class="column">
                    <h1><?php echo $lang['accueil_automobilistes']?></h1>
                </div>
                <div class="column">
                    <h1><?php echo $lang['accueil_conducteurs']?></h1>
                </div>
            </div>

            <div class = "accueil_div_3"></div>
            <div class = "accueil_div_4">
                <h1><?php echo $lang['accueil_nosTests']?></h1>
                <div class="column">
                    <div class="icone_accueil1"></div>
                </div>
                <div class="column">
                    <div class="icone_accueil2"></div>
                </div>
                <div class="column">
                    <div class="icone_accueil3"></div>
                </div>
                <div class="column">
                    <h1><?php echo $lang['accueil_cardiaque']?></h1>
                </div>
                <div class="column">
                    <h1><?php echo $lang['accueil_reflexe']?></h1>
                </div>
                <div class="column">
                    <h1><?php echo $lang['accueil_auditif']?></h1>
                </div>
            </div>

            
            <div class = "accueil_div_5"></div>

            <div class = "accueil_div_6">
                <h1><?php echo $lang['accueil_histoire_titre']?></h1>
                <p><?php echo $lang['accueil_histoire']?></p>
            </div>

        </div>


        <footer class="footer"><h1>contenu du footer</h1> </footer>

    </body>
</html>