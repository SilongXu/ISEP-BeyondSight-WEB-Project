<!DOCTYPE html>
<html >
    <?php include "includes/header.php" ?>


    <div class="capteur"><h1>Gérer les capteurs</h1></div>

    <script>

   function deltest(id){
        var msg = confirm("Are you sure you want to delete this test?");

    if (msg) {
        window.location = "capteurs.php?did="+id;
    }
    }

    </script>


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
                 if($role[0]='Utilisateur'){               echo "<script> window.location = \"404.php\"</script>";}?>
    	<?php

        echo "<div class='tableauCapteur'>";
    	



$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "beyondsight";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
                if($_GET['did']!=""){
            $conn->query("delete from tests where idTest=".$_GET["did"]);
        }
$sql = "SELECT idTest, capteur, test FROM tests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Capteur</th><th>Test</th><th>Effacer</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {;

        $q=$row["idTest"];
        echo "<tr><td>".$row["idTest"]."</td><td>".$row["capteur"]."</td><td>".$row["test"]."</td><td><a href=\"javascript:deltest(id=".$row["idTest"].")\">Delete</a></tr>";

    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
                <div class = "formbis">
                    <form method = "post">
                        <label for="lname">Nom du capteur</label>
                        <input class="champ" type="text" name="capteur" id="capteur" placeholder="Mon capteur" required>

                        <label for="lname">Type de test</label>
                        <input class="champ" type="text" name="test" id="test" placeholder="Mon test" required>
  
                        <input type="submit" name="formsend" id="formsend" value="Ok">
                    </form>
                                    <?php  include 'includes/database.php"';
                        include 'includes/addTest.php';
                ?>
                

        </div>
</html>