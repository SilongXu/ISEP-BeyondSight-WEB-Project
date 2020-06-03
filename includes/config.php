<?php

    if (!isset($_SESSION)) {
        session_start();
    }

	if(!isset($_SESSION['lang'])){
		$_SESSION['lang'] = 'fr';
	}
	elseif (isset($_GET['lang']) && $_SESSION['lang']!=$_GET['lang'] && !empty($_GET['lang'])) {
		if($_GET['lang'] == "fr"){
			$_SESSION['lang']="fr";
		}
		elseif ($_GET['lang'] == "en"){
			$_SESSION['lang']="en";
		}
		elseif ($_GET['lang'] == "ch"){
			$_SESSION['lang']="ch";
		}
	}

	require_once "langues/" . $_SESSION['lang'] . ".php";
?>