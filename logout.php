<?php
session_start();
// session_destroy();
unset ($_SESSION["id_user"]);
unset ($_SESSION["username"]);
unset ($_SESSION["pass"]);
unset ($_SESSION["sname"]);
unset ($_SESSION["lastname"]);
unset ($_SESSION["email"]);
unset ($_SESSION["tell"]);
unset ($_SESSION["saddress"]);
unset ($_SESSION["s_status"]);

header("Location: index.php");	
?>