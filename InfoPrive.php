<?php include "includes/sessStart.php" ?>

<!DOCTYPE html>
<html>
    
        <?php include "includes/header.php" ?>

    <body>
            <script>

   function deluser(id){
        var msg = confirm("Are you sure you want to delete this user?");

    if (msg) {
        window.location = "InfoPrive.php?did="+id;
    }
    }

    </script>
    	<!-- Menu Bar -->
    	<?php include "includes/menubar.php" ?>
        <!-- Bouton Search-->
        <?php include "includes/searchbar.php" ?>
             <?php include "includes/footer.php" ?>
             <?php if(!isset($_SESSION['idUtilisateur'])){              echo "<script> window.location = \"404.php\"</script>";}?>

                 <?php          $db=new mysqli("localhost:3308","root","","beyondsight"); 
                 $c=$db->query("SELECT role FROM utilisateurs WHERE idUtilisateurs=".$_SESSION['idUtilisateur']);
                 $role=$c->fetch_row();
                 if($role[0]!='Administrateur'){               echo "<script> window.location = \"404.php\"</script>";}
                                 if($_GET['did']!=""){
            $db->query("delete from uitlisateurs where idUtilisateurs=".$_GET["did"]);
        }?>



        <div id="bgConnexion"></div>

        <div class="partieDeDonnee">
        <table cellpadding="0" cellspacing="0" width="95%"  >
                <tr>
                    <td>IdUtilisateur</td>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Adresse e-mail</td>
                    <td>Rôle</td>
                    <td>Numero De Telephone</td>
                    <td>Supprimer</td>
                    <td>Confirmer changement de rôle</td>
                </tr>
            <?php

                $db=new mysqli("localhost:3308","root","","beyondsight");
                $sql ="SELECT idUtilisateurs,nom,prenom,adresseMail,numeroDeTelephone,role From utilisateurs ";
                $resultat=$db ->query($sql);
                if($resultat){
                    while($attr = $resultat->fetch_row())
                    {
            ?>
            <form method="post">
                <tr>
                    <td> <?php echo $attr[0];?> </td>
                    <td> <?php echo $attr[1];?> </td>
                    <td> <?php echo $attr[2];?> </td>
                    <td> <?php echo $attr[3];?> </td>
                    <td>
                        <select class="champ" name="role" id="role" value=<?php echo $attr[5];?>>
                            <option value="Administrateur" >Administrateur</option>
                            <option value="Gestionnaire" >Gestionnaire</option>
                            <option value="Utilisateur" >Utilisateur</option>
                        </select>
                            <input class="hidden" type="text" id="idUser" name="idUser" value="<?php echo $attr[0];?>">
                    </td>
                    <td> <?php echo $attr[4];?> </td>
                    <td><?php echo "<a href=\"javascript:deltest(id=".$attr[0].")\">Delete</a>"?></td>
                    <td><input type="submit" name="formsend" id="formsend" value="Ok"></td>
                </tr>
            </form>
        <?php }}?>

            </table>
        </div>
        
<?php include 'includes/editUserRole.php'?>


    </body>
</html>