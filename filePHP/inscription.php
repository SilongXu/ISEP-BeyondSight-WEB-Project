<!DOCTYPE html>
<html>
    
    <?php include "includes/header.php" ?>

    <body>
      <!-- Menu Bar -->
      <?php include "includes/menubar.php" ?>
        <!-- Bouton Search-->
        <?php include "includes/searchbar.php" ?>


        <div class="inscription_div_1">
                <div class="inscription_div_2">
                    <h2 class = "inscription_title"><?php echo $lang['inscription_titre']?><h2/>
                </div>


                <div class = "form" onsubmit="return verifForm(this)">
                    <form method = "post">
                        <label for="prenom"><?php echo $lang['inscription_prenom']?></label>
                        <input class="champ" type="text" name="prenom" id="prenom" placeholder="Jean..." onblur="verifPrenomNom(this)" required>

                        <label for="nom"><?php echo $lang['inscription_nom']?></label>
                        <input class="champ" type="text" name="nom" id="nom" placeholder="Dupont..." onblur="verifPrenomNom(this)" required>

                        <label for="tel"><?php echo $lang['inscription_telephone']?></label>
                        <input class="champ" type="text" name="tel" id="tel" placeholder="0601010101..." onblur="verifTel(this)" required>

                        <label for="email"><?php echo $lang['inscriptiont_email']?></label>
                        <input class="champ" type="email" name="email" id="email" placeholder="monemail@gmail.com..." onblur="verifMail(this)" required>

                        <label for="password"><?php echo $lang['inscription_mdp']?></label>
                        <input class="champ" type="password" name="password" id="password" placeholder="1234..." required>

                        <label for="cpassword"><?php echo $lang['inscription_cmdp']?></label>
                        <input class="champ" type="password" name="cpassword" id="cpassword" placeholder="1234..." required>
  
                        <button type="submit" name="formsend" id="formsend2" value="Ok"><?php echo $lang['inscription_envoyer']?></button>
                    </form>
                </div>


                <script type="text/javascript">

                    function verifForm(f)
                    {
                       var nomOk = verifPrenomNom(f.nom);
                       var prenomOk = verifPrenomNom(f.prenom);
                       var mailOk = verifMail(f.email);
                       var telOk = verifTel(f.tel);
                       
                       if(nomOk && prenomOk && mailOk && telOk){
                          return true;
                       }
                  
                       else
                       {
                          alert("Veuillez remplir correctement tous les champs");
                          return false;
                       }
                    }


                    function verifPrenomNom(champ){
                       if(champ.value.length < 2 || champ.value.length > 25)
                       {
                          surligne(champ, true);
                          return false;
                       }
                       else
                       {
                          surligne(champ, false);
                          return true;
                       }
                    }



                    function surligne(champ, erreur){
                       if(erreur)
                          champ.style.backgroundColor = "#fba";
                       else
                          champ.style.backgroundColor = "";
                    }

                    function verifMail(champ)
                    {
                       var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
                       if(!regex.test(champ.value))
                       {
                          surligne(champ, true);
                          return false;
                       }
                       else
                       {
                          surligne(champ, false);
                          return true;
                       }
                    }

                    function verifTel(champ)
                    {
                       var tel = parseInt(champ.value);
                       if(isNaN(tel) || tel < 0 || tel > 799999999)
                       {
                          surligne(champ, true);
                          return false;
                       }
                       else
                       {
                          surligne(champ, false);
                          return true;
                       }
                    }


                </script>

                <?php  include 'includes/database.php';
                       include 'includes/signin.php'; ?>

    </div>
    
    
        <?php
            if(isset($_SESSION['signIn'])){
                header('location: '.'connexion.php');
                unset($_SESSION['signIn']);
            }
        ?>


        

    </body>
</html>