<?php  include "includes/database.php"?>
<!DOCTYPE html>
<html>
    
    <?php include "includes/header.php" ?>

    <body>
        <!-- Menu Bar -->
        <?php include "includes/menubar.php" ?>
        <!-- Bouton Search-->
        <?php include "includes/searchbar.php" ?>


        <div id="bgConnexion">
            <div id="titleConnexion">
                <h2 id= "h2Connexion">Connexion<h2/>
            </div>
        </div>

        <div class="frameConnexion">
            <form metod="POST" action="includes/login.php">
                <label for="lname">Email</label>
                <input class="champ" type="email" name="loginEmail" id="email" placeholder="monemail@gmail.com..." required>

                <label for="lname">Mot de passe</label>
                <input class="champ" type="password" name="password" id="password" placeholder="1234..." required>

                <input type="submit" name="formlogin" id="formlogin" value="Login">
            </form>
        </div>

        <?php  include "includes/login.php" ?>

        <?php
            if(isset($_SESSION['email'])){
                header("Refresh:3;url=ComptePrive.php");
            }
        ?>

    </body>
</html>