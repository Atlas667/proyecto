<?php
	
	session_start();
	global $loggedIn;
	if(isset($_SESSION["username"])){
		$loggedIn = True;
	}
	global $p;
	if(isset($_GET["p"])){
		$p = $_GET["p"];

		switch($p){

			case "Inicio":
				include "inicio.php";
				break;

			case "Registrate":
				include "registrate.php";
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
				include "inicio.php";
				break;
		}

	}
	else{include "inicio.php";}
	

?>