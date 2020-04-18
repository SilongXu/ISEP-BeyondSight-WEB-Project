<!DOCTYPE html>
<html >
    <?php include "includes/header.php" ?>

    <script>
        function remove(idCap){
              if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
            xmlhttp.open("DELETE", "removeCapteur.php?q=" + idCap, true);
    xmlhttp.send();
  }

        }
    </script>

    <body>
    	<!-- Menu Bar -->
        <?php include "includes/menubar.php" ?>
        <!-- Bouton Search-->
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

$sql = "SELECT idTest, capteur, test FROM tests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Capteur</th><th>Test</th><th>Effacer</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $q=$row["idTest"];
        echo "<tr><td>".$row["idTest"]."</td><td>".$row["capteur"]."</td><td>".$row["test"]."</td><td><button onclick='remove(".$q.")'>Suppr</button></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
</html>