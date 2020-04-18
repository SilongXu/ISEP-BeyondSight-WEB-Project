
<!DOCTYPE html>
<html>
    <?php include "includes/header.php" ?>

    <body>
        <!-- Menu Bar -->
        <?php include "includes/menubar.php" ?>
        <!-- Bouton Search-->
        <?php include "includes/searchbar.php" ?>


    	<!-- Contact Page 1 -->
    	<div class = "contact_div_1"></div>
        <div class = "contact_div_2">
            <h1 class = "contact_title">Contactez-nous</h1>
        </div>

        <div class="container">
        <form action="">
            <label for="fname">Prénom</label>
            <input type="text" id="fname" name="firstname" placeholder="Votre prénom...">

            <label for="lname">Nom</label>
            <input type="text" id="lname" name="lastname" placeholder="Votre nom...">

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Votre adresse e-mail...">

            <label for="subject">Sujet</label>
            <textarea id="subject" name="subject" placeholder="Écrivez ce dont vous voulez nous parler..." style="height:200px"></textarea>

            <input type="submit" value="Envoyer">
        </form>
</div>

    </div>
    </body>
</html>