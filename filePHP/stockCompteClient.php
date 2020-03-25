<?php
    $dbc =mysqli_connect("localhost","root","","compte_client") or die("Error connecting to MySQL server");

    $query1="CREATE TABLE compte_client(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        phone_number VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        Mot_De_Passe VARCHAR(30) NOT NULL
    )";
    mysqli_query($dbc,$query1) or die("Error creating table");

    $firstname =$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $numTelephone=$_POST['numTelephone'];
    $email=$_POST['email'];
    $motDePasse=$_POST['motDePasse'];

    $query2="INSERT INTO capteur values(1,"$firstname","$lastname","$numTelephone","$email","$motDePasse")";
    mysqli_query($dbc,$query2) or die ("Error querying database");

    mysqli_close($dbc);

 ?>