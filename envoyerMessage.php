<!DOCTYPE html>
<html >
    <?php include "includes/header.php" ?>


    <div class="capteur"><h1>Envoyer un message</h1></div>



    <body>
        <!-- Menu Bar -->
        <?php include "includes/menubar.php" ?>
        <!-- Bouton Search-->
        <?php include "includes/searchbar.php" ?>
                <?php include "includes/footer.php" ?>
                <?php if(!isset($_SESSION['idUtilisateur'])){              echo "<script> window.location = \"404.php\"</script>";}?>


    	




                <div class = "formbis">
                    <form method = "post">
                        <label for="lname">Destinataire</label>
                        <select class="champ" name="idDestinataire" id="idDestinataire" required>
                            <?php
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

$sql = "SELECT idUtilisateurs, nom, prenom FROM utilisateurs WHERE idUtilisateurs!=".$_SESSION['idUtilisateur'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {;

        $q=$row["idMessagesPrives"];
        echo "<option value=\" ".$row["idUtilisateurs"]." \">".$row["prenom"]." ".$row["nom"]."</option>";}}
        ?>

                        </select>

                        <label for="lname">Objet</label>
                        <input class="champ" type="text" name="objet" id="objet" placeholder="Objet du message" required>

                        <label for="lname">Texte</label>
                        <input class="champ" type="text" name="texte" id="texte" placeholder="Ecrivez ici votre message" required>
  
                        <input type="submit" name="formsend" id="formsend" value="Ok">
                    </form>
                                    <?php  include 'includes/database.php';
                        include 'addMessagePrive.php';
                ?>
                

        </div>
    </body>
    </html>