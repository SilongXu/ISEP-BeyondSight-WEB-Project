<?php

if (!isset($_SESSION)) {
    session_start();
}

// VAR SESSION //

// contre les voles de sessions
if (isset($_SESSION['ticket']) AND isset($_COOKIE['ticket'])) {

    // si c'est un hacker on destroy
    if ($_COOKIE['ticket'] != $_SESSION['ticket']) {
        $_SESSION = array();
        session_destroy();
        header('location:accueil.php');
    }
// si c'est la 1e fois
} else {
    $ticket = session_id().microtime().rand(0,9999999999);
    $ticket = hash('sha512', $ticket);
    setcookie("ticket", $ticket, time() + (60 * 30));
    $_SESSION['ticket'] = $ticket;
}

/*
// contre les voles de sessions
if (isset($_SESSION['ticket']) AND isset($_COOKIE['ticket'])) {

    // si c'est le bon utilisateur
    if ($_COOKIE['ticket'] == $_SESSION['ticket']) {
        $ticket = session_id() . microtime() . rand(0, 9999999999);
        $ticket = hash('sha512', $ticket);
        $_COOKIE['ticket'] = $ticket;
        $_SESSION['ticket'] = $ticket;
    // si c'est un hacker on destroy
    } else {
        $_SESSION = array();
        session_destroy();
        header('location:accueil.php');
    }
// si c'est la 1e fois
} else {
    $ticket = session_id().microtime().rand(0,9999999999);
    $ticket = hash('sha512', $ticket);
    setcookie("ticket", $ticket, time() + (60 * 30));
    $_SESSION['ticket'] = $ticket;
}*/

// CSRF  //

// contre les csrf (authentifier les formulaires)
if (isset($_SESSION['token']) AND isset($_POST['token'])) {

    // Si c'est un hacker on destroy
    if ($_SESSION['token'] != $_POST['token']) {
        $_SESSION = array();
        session_destroy();
        header('location:accueil.php');
    }
    // sinon on continue
//si c'est la 1e fois
} else {
    $token = session_id().microtime().rand(0,9999999999);//bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
    $_SESSION['token'] = $token;
}



// !!!!!!!!!!!!!!

// <input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token']; ?'>" />

// !!!!!!!!!!!!!!

?>