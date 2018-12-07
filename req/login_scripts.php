<?php
	
	session_start();

	$list = [
	["username" => "josue", "password" => "aac09534114879f13117bfd3e5a85bd0443ec7f776e737258de48f449788c4f1"], 
	["username" => "admin","password" => "d74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1"]];

	$p;
	if(isset($_GET["p"])){
		$p = $_GET["p"];
	}else{
		header("refresh:1;url=http://sici4997.uprp.edu/~josue.nadal/proyecto/index.php");
	}



	function checkLogin(){

		global $list;
		$user = strtolower(trim($_POST["inputUsername"]));
		$pass = hash("sha256", trim($_POST["inputPassword"]));

		foreach ($list as $u) {
			
			if($user == $u["username"]){

				if($pass == $u["password"]){
					return true;
				}
				break;

			}
		}

		return false;

	}

	if($p == "login"){




		if(checkLogin())
		{
			$user = strtolower(trim($_POST["inputUsername"]));
	  		$_SESSION["username"] = $user;
	  		echo "Log in succesful!";
	  		header("refresh:1;url=http://sici4997.uprp.edu/~josue.nadal/proyecto/index.php");
	  		exit();

		}else
		{
		  	echo "Log in unsuccesful.";
		  	header("Location: ../index.php?p=Log in&e=1");
		  	exit();
		}

	}elseif($p == "logout") {
		
		session_destroy();
		header("Location: ../index.php");
		exit();

	}elseif($p == "registrate") {
		
		$nombre = strtolower(trim($_POST["inputNombre"]));
		$apellidos = strtolower(trim($_POST["inputApellidos"]));
		$user = strtolower(trim($_POST["inputUsername"]));
		$email = strtolower(trim($_POST["inputEmail"]));
		$pass = hash("sha256", trim($_POST["inputPassword"]));

		array_push($list, ["username" => $user, "password" => $pass]);
		$_SESSION["username"] = $user;
		header("refresh:1;url= ../index.php");

	}

	
  


?>