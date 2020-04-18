<?php
	

<<<<<<< HEAD
	define('HOST', 'localhost:3306');
=======
	define('HOST', 'localhost:3308');
>>>>>>> master
	define('DB_NAME', 'beyondsight');
	define('USER', 'root');
	define('PASS', '');

	try{
		$db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME,USER, PASS);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //afficher les erreurs
		//echo 'connecté';

	}catch(PDOException $e){
		echo $e;
	}
?>