
<!DOCTYPE html>
<html>
    
        <?php include "includes/header.php" ?>

    <body>
    	<!-- Menu Bar -->
    	<?php include "includes/menubar.php" ?>
        <!-- Bouton Search-->
        <?php include "includes/searchbar.php" ?>
                <?php include "includes/footer.php" ?>
                <?php if(!isset($_SESSION['idUtilisateur'])){              echo "<script> window.location = \"404.php\"</script>";}?>
                 <?php          $db=new mysqli("localhost:3308","root","","beyondsight"); 
                 $c=$db->query("SELECT role FROM utilisateurs WHERE idUtilisateurs=".$_SESSION['idUtilisateur']);
                 $role=$c->fetch_row();
                 if($role[0]='Administrateur'){   echo"      <div class=\"InformationUsers\" id=\"lienInfoPrive\"><a class =\"link\" href=\"InfoPrive.php\">Information des utilisateurs</a></div>";}?>
                 <?php          $db=new mysqli("localhost:3308","root","","beyondsight"); 
                 $c=$db->query("SELECT role FROM utilisateurs WHERE idUtilisateurs=".$_SESSION['idUtilisateur']);
                 $role=$c->fetch_row();                 
                 if($role[0]!='Utilisateur'){              echo "<div class=\"InfoTests\">
            <a class =\"link\" id=\"lienCapteur\" href=\"capteurs.php?did=\">Gérer les tests</a>";}?>       
        
        <!--Background de connexion-->
        <div id="bgConnexion"></div>

        

                    
        <div class="EditProfile">
            <a class ="link" href="editprofil.php">Editer mon profil</a>
        </div>

        <div class="InfoResultat">
            <a class ="link" href="InfoResultat.php">Résultats des tests</a>
         </div>

        
        </div>

        <div class="InformationMessage">
            <a class ="link" href="messagerie.php?did=">Messages</a>
        </div>








    </body>
</html>