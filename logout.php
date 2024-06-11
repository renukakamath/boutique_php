<?php
    include "connection.php";
	session_destroy();
	redirect("login.php");
	die();
?>