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
            <form metod="">
                <label for="lname">Email</label>
                <input class="champ" type="email" name="loginEmail" id="email" placeholder="monemail@gmail.com..." required>

                <label for="lname">Mot de passe</label>
                <input class="champ" type="password" name="password" id="password" placeholder="1234..." required>

                <input type="submit" name="formlogin" id="formlogin" value="Login">
            </form>
        </div>

        <?php 

        include 'includes/database.php';
        global $db;

        if(isset($_POST['formlogin'])){
            extract($_POST);
            if (!empty($loginEmail) && !empty($loginPassword)) {
               
               $q = $db->prepare("SELECT * FROM utilisateurs WHERE email= :email");
               $q->execute(['email' => $loginEmail]);
               $result = $q->fetch();

               if ($result == true) {
                   // le compte existe
                $hashpassword = $result['password'];
                if (password_verify($loginPassword, $hashpassword)) {
                    echo "Connexion en cours";

                }
                else{
                    echo "Le mot de passe n'est pas correct";
                }


               }
               else{
                echo "Le compte portant l'email ". $loginEmail . "n'existe pas";

               }
            }
            else {
                echo "Veuillez compléter l'ensemble des champs";
            }
        }

        ?>

    </body>
</html>