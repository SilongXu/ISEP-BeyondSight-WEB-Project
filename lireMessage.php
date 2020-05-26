<!DOCTYPE html>
<html >
    <?php include "includes/header.php" ?>


    <div class="capteur"><h1>Lire un message</h1></div>



    <body>
        <!-- Menu Bar -->
        <?php include "includes/menubar.php" ?>
        <!-- Bouton Search-->
        <?php include "includes/searchbar.php" ?>

    	<?php

        echo "<div class='tableauMessage'>";
    	


$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "beyondsight";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

        
$sql = "SELECT idMessagesPrives, idAuteur, objet, texte FROM messagesprives WHERE idMessagesPrives=".$_GET["id"];
$result = $conn->query($sql);
    echo "<table><tr><th>ID</th><th>Objet</th><th>idAuteur</th><th>Message</th></tr>";
    // output data of each row
    $row = $result->fetch_assoc();
        echo "<tr><td>".$row["idMessagesPrives"]."</td><td>".$row["objet"]."</td><td>".$row["idAuteur"]."</td><td>".$row["texte"]."</td></tr></table>";


$conn->close();
?>
<a href="messagerie.php?did=">Retour à la messagerie</a>
</body>
</html>