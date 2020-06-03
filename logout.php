<?php include "includes/sessStart.php" ?>

<?php

if (!isset($_SESSION)) {
    session_start();
}

unset($_SESSION['email']);

header('location: '.'accueil.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta cahrset="utf-8">
</head>

<body>
    
</body>
</html>