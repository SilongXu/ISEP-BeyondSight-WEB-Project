<?php include "includes/sessStart.php" ?>

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
        

        <div id="bgConnexion"></div>

        <?php
            $db=new mysqli("localhost:3308","root","","beyondsight");
            $sql ="SELECT nom,prenom,adresseMail,motDePasse,numeroDeTelephone FROM utilisateurs WHERE idUtilisateurs=".$_SESSION['idUtilisateur'].";";
            $resul=$db ->query($sql);
            if($resul){
                while($attr=$resul->fetch_row()){
        ?>
                    <div class="partieEditInformation">
                        <form method="post">
                            <label for="fname">Prénom</label>
                            <input class="champEdit" type="text" id="fname" name="firstname" value="<?php echo $attr[1];?>">

                            <label for="lname">Nom</label>
                            <input class="champEdit" type="text" id="lname" name="lastname" value="<?php echo $attr[0];?>">

                            <label for="tel">Téléphone</label>
                            <input class="champEdit" type="text" id="tel" name="telephone" value="<?php echo $attr[4];?>">

                            <label for="mail">Email</label>
                            <input class="champEdit" type="email" id="mail" name="email" value="<?php echo $attr[2];?>">

                            <label for="mdp">Mot de passe</label>
                            <input class="champEdit" type="password" id="mdp" name="motDePasse" required>

                            <label for="cmdp">Confirmer votre mot de passe</label>
                            <input class="champEdit" type="password" id="cmdp" name="conMotDePasse" required>

                            <input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token']; ?>" />
                            <input type="submit" value="Envoyer" name="formEdit">
                        </form>
        
                    </div>

        <?php   }
            }
        ?>
        <?php include "includes/formEdit.php"?>
        <?php
            if(isset($_SESSION['Edit'])){
                header("location:ComptePrive.php");
                unset($_SESSION['Edit']);
            }
        ?>




    </body>
</html>