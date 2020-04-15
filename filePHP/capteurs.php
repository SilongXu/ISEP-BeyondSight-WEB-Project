<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styles.css" />
        <title>Beyond Sight</title>
        <link rel="icon" href="images/favicon.ico" />
    </head>

    <script>
        function remove(idCap){
              if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
            xmlhttp.open("GET", "removeCapteur.php?q=" + idCap, true);
    xmlhttp.send();
  }
        }
    </script>

    <body>
    	<!-- Menu Bar -->
    	<!--<div><img src="images/menu_icon.png" class = "icon_menu"></div>-->
    	<nav class = "menu_bar">
    		<div class = "left">
                <a href="accueil.html">
                    <div><img src="images/logo_blanc_sans_fleche.png" class = "chrono"></div>
                    <div><img src="images/logo_blanc_fleche2.png" class = "fleche"></div>
                </a>
			</div>
			<div class = "center">
                <div><a href="accueil.html" class = "active">Accueil</a></div>
                <div><a href="forum.html">Forum</a></div>
                <div><a href="FAQ.html">FAQ</a></div>
                <div><a href="contact.html">Contact</a></div>
                
            </div>
			<div class = "right">
				<div><a href="connexion.html">Connexion</a></div>
				<div><a href="inscription.html">Inscription</a></div>
                </div>
			</div>
            <div class = "langues">
                <span>Fr</span>
                <div class = "not_choosen_language">
                    <ul>
                        <li><a href="">English</a></li>
                        <li><a href="">Chinese</a></li>
                    </ul>
                </div>
            </div>
    	</nav>

        <!-- Bouton Search-->
        <div class = "search-box">
            <input class="search-txt" type="text" name="" placeholder="Rechercher un utilisateur...">
            <a class="search-btn" href="#">
                <div><img src="images/loupe.png" class="loupe"></div>
            </a>
        </div>

        <div>
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
        echo "<tr><td>".$row["idTest"]."</td><td>".$row["capteur"]."</td><td>".$row["test"]."</td><td><button onclick='remove(".$row["idTest"].")'>Suppr</button></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
</html>