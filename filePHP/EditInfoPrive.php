

<!DOCTYPE html>
<html>
    
        <?php include "includes/header.php" ?>

    <body>
    	<!-- Menu Bar -->
    	<?php include "includes/menubar.php" ?>
        <!-- Bouton Search-->
        <?php include "includes/searchbar.php" ?>
        

        <div id="bgConnexion"></div>

        <?php
            $db=new mysqli("localhost:3306","root","","beyondsight");
            $sql ="SELECT nom,prenom,adresseMail,motDePasse,numeroDeTelephone FROM utilisateurs;"
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

                            <label for="lname">Téléphone</label>
                            <input class="champEdit" type="text" id="" name="telephone" value="<?php echo $attr[4];?>">

                            <label for="lname">Email</label>
                            <input class="champEdit" type="email" id="" name="email" value="<?php echo $attr[2];?>">

                            <label for="lname">Mot de passe</label>
                            <input class="champEdit" type="text" id="" name="motDePasse" value="<?php echo $attr[3];?>">

                            <label for="lname">Confirmer votre mot de passe</label>
                            <input class="champEdit" type="text" id="" name="conMotDePasse" value="<?php echo $attr[3];?>">
            
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