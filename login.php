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
    <link rel="stylesheet" href="css/style.css">
 
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
    

  <body>
    
    <main role="main" class="container jumbotron bg-dark text-light"  style="max-width:500px; min-width:35%;  ">
        <form action="req/login_scripts.php?p=login" method="post" class="form-signin text-center">
            <img class="rounded-circle mb-4" src="https://scontent-mia3-2.xx.fbcdn.net/v/t1.0-9/18402995_1574837829206969_5325005342584625522_n.jpg?_nc_cat=105&_nc_ht=scontent-mia3-2.xx&oh=03ec280f7a16f05eeb644d506d865858&oe=5C715DA4" alt="" width="60%">
            <h1 class="h3 mb-3 font-weight-normal">Log in</h1>
            <!-- Alerta -->
            <?php
                if(isset($_GET["e"]) && $_GET["e"] == 1){
                    echo '<div class="alert alert-danger" role="alert">
                        Usuario no encontrado.
                    </div>';
                }
            ?>
            
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
