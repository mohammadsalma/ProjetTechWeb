<?php
// on prolonge la session
session_start();

// on écrase le tableau de session
//$_SESSION = array();

// et on détruit la session
session_destroy();

// redirection vers page principale
header('Location: index.php');

exit();
?>
