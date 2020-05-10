<!DOCTYPE html>
<html >
    <?php include "includes/header.php" ?>


    <div class="capteur"><h1>Messagerie</h1></div>

    <script>

   function delmessage(id){
        var msg = confirm("Are you sure you want to delete this message?");

    if (msg) {
        window.location = "messagerie.php?did="+id;
    }
    }

    </script>


    <body>
        <!-- Menu Bar -->
        <?php include "includes/menubar.php" ?>
        <!-- Bouton Search-->
        <?php include "includes/searchbar.php" ?>

    	<?php

        echo "<div class='tableauMessage'>";
    	


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
            $conn->query("delete from messagesprives where idMessagesPrives=".$_GET["did"]);
        }
$sql = "SELECT idMessagesPrives, idAuteur, objet FROM messagesprives WHERE idDestinataire=".$_SESSION['idUtilisateur'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Objet</th><th>idAuteur</th><th>Effacer</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {;

        $q=$row["idMessagesPrives"];
        echo "<tr><td>".$row["idMessagesPrives"]."</td><td><a href=\"lireMessage.php?id=".$row["idMessagesPrives"]."\">".$row["objet"]."</a></td><td>".$row["idAuteur"]."</td><td><a href=\"javascript:delmessage(id=".$row['idMessagesPrives'].")\">Delete</a></td></tr>";

    }
    echo "</table></div>";
} else {
    echo "0 results";
}
$conn->close();
?>
<a href="envoyerMessage.php">Envoyer un nouveau message</a>
</body>
</html>