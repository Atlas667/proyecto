<?php
	
	session_start();
	global $p;
	if(isset($_GET["p"])){
		$p = $_GET["p"];

		switch($p){

			case "Inicio":
				include "home.php";
				break;

			case "Register":
				include "register.php";
				break;
			
			case "Log in":
				include "login.php";
				break;

			case "Productos":
				include "productos.php";
				break;

			case "Contactanos":
				include "contactanos.php";
				break;

			case "Servicios":
				include "servicios.php";
				break;

			default:
				include "home.php";
				break;
		}

	}
	else{include "home.php";}
	

?>