<?php
	
	session_start();
	$p;

	if(isset($_GET["p"])){
		$p = $_GET["p"];
	}

	if($p == "login"){

		$user = strtolower(trim($_POST["inputUsername"]));
		$pass = hash("sha256", $_POST["inputPassword"]);

		$list = ["josue" => "aac09534114879f13117bfd3e5a85bd0443ec7f776e737258de48f449788c4f1", 
				"admin" => "d74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1"];

		if(!empty($list[$user]))
		{
		  	if($list[$user] == $pass){
		  		$_SESSION["username"] = $user;
		  		echo "Log in succesful!";
		  		header("refresh:1;url=http://sici4997.uprp.edu/~josue.nadal/proyecto/index.php");
		  		exit();
		  	}else{
			  	echo "Log in unsuccesful.";
			  	header("Location: http://sici4997.uprp.edu/~josue.nadal/proyecto/index.php?p=Log in&e=1");
			  	exit();
		  	}
		}else
		{
		  	echo "Log in unsuccesful.";
		  	header("Location: http://sici4997.uprp.edu/~josue.nadal/proyecto/index.php?p=Log in&e=1");
		  	exit();
		}

	}elseif($p == "logout") {
		
		session_destroy();
		header("Location: http://sici4997.uprp.edu/~josue.nadal/proyecto/index.php");

	}

	
  


?>