<?php

	session_start();

	require_once('database.php');

	global $db;

	if (isset($_GET['user'])) {
		

		$user = (String) trim($_GET['user']);

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