<?php
    if(isset($_SESSION["username"])){
      header("Location: index.php");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <title>Millenium Tint & Design</title>
  </head>
  
  <br \>
  <br \>
  <br \>
  
  <?php
    if(isset($_SESSION["username"])){

    }
    include "req/nav.php";
  ?>
    

  <body style="background-color: #f5f5f5">

  	<br \>
  	<br \>
    
    <main role="main" class="container col-md-5">
        <form action="login_scripts.php?p=login" method="post" class="form-signin text-center">
            <img class="mb-4" src="https://i.postimg.cc/y8h9BBgD/logo.png" alt="" width="144" height="144">
            <h1 class="h3 mb-3 font-weight-normal">Log in</h1>
<<<<<<< HEAD
            <label for="inputEmail" class="sr-only">Email address</label>
            <input id="inputEmail" class="form-control" placeholder="Email" required="true" autofocus="" type="email">
            <label for="inputPassword" class="sr-only">Password</label>
            <input id="inputPassword" class="form-control" placeholder="Password" required="true" type="password">
            <div class="checkbox mb-3">
                <label>
                    <input value="remember-me" type="checkbox"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <br \>
            <a href="https://www.facebook.com/Millennium-Tint-and-Detailing-275699582454140/" class="fa fa-facebook"></a>
            </br>
            <span class="text-muted">Millenium Tint & Design</span>
            </br>
            <span class="text-muted">Calle villa #301 Ponce, Puerto Rico</span>
            </br>
            <span class="text-muted">(787) 243-8373</span>
            <br \>
            <br \>
=======
            <!-- Email ó Username-->
            <label for="inputUsername" class="sr-only">Username</label>
            <input name="inputUsername" class="form-control" placeholder="Username" required="" autofocus="" type="text">
            <!-- Password -->
            <label for="inputPassword" class="sr-only">Password</label>
            <input name="inputPassword" class="form-control" placeholder="Password" required="" type="password">
            <br \>
            <!-- Sign in Button -->
            <button class="btn btn-lg btn-success btn-block" type="submit">Log in</button>
            <br \>
>>>>>>> e8637a910c4131c4bc226285795dea93b6eaabaa
        </form>
        <button href="registrate.php" class="btn btn-lg btn-primary btn-block" >Registrate</button>
        <br \>
    </main>

    <!-- Footer -->
    <?php
      include("req/footer.php");
    ?>
    
    <br \>
    <br \>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
