<?php

	try{
		$db=new PDO('mysql:host=localhost:3306;dbname=beyondsight','root','');
		
		echo 'connecté';

	}catch(PDOException $e){
		echo $e;
	}
?>
