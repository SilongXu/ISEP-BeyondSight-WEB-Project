<?php
	

	$HOST='localhost:3308';

	$DB_NAME='beyondsight';
	$USER='root';
	$PASS='';

	try{
		$db = new PDO("mysql:host=" . $HOST . ";dbname=" . $DB_NAME,$USER, $PASS);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //afficher les erreurs
		//echo 'connecté';

	}catch(PDOException $e){
		echo $e;
	}
?>