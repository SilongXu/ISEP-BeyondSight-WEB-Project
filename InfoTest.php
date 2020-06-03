<?php include "includes/sessStart.php" ?>

<?php  include "includes/database.php"?>
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

        

        <div class="partieDeDonnee">
        <table cellpadding="0" cellspacing="0" width="95%"  >
                <tr>
                    <td>IdTest</td>
                    <td>Capteur</td>
                    <td>Test</td>

                </tr>
            <?php

                $db=new mysqli("localhost:3308","root","","beyondsight");
                $sql ="SELECT * From tests WHERE idUtilisateur=".$_SESSION['idUtilisateur'];
                $resultat=$db ->query($sql);
                if($resultat){
                    while($attr = $resultat->fetch_row())
                    {
            ?>
                <tr>
                    <td> <?php echo $attr[0];?> </td>
                    <td> <?php echo $attr[1];?> </td>
                    <td> <?php echo $attr[2];?> </td>

                </tr>
            <?php
                    } 
                }
                //mysql_close($db);
            ?>
            </table>
        </div>




    </body>
</html>