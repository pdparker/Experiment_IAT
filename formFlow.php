<?php
    session_start();
    $degree=$_POST['degree'];
	if ($degree=='UG') {
	    header("Location: ./form.html");
	} else {
	    header("Location: ./form_pg.php");
	}
?>