<?php

    if (!isset($_SESSION)) {
        session_start();
    }

	require_once('database.php');

	global $db;

	if (isset($_GET['user'])) {

	    include("filterAttacks.php");
		$user = filterAttacks(trim($_GET['user']), true, true);

		$req = $db->prepare("SELECT * 
			FROM utilisateurs
			WHERE nom LIKE ?
			LIMIT 10");

		$executeReq = $req->execute(array($user. '%'));
		$req = $req->fetchALL();

		foreach ($req as $r) {
		?>
			<div style="margin-top: 20px 0; border-bottom: 2px solid #ccc">
				<?= $r['nom'] . " " . $r['prenom'] ?>
			</div>

		<?php
		}
	}

?>