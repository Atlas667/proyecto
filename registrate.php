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

    <title>Regístrate</title>
  </head>

  <?php
    include "req/nav.php";
  ?>

  <body>

    <br \>
    <br \>


    <main role="main" class="container jumbotron bg-dark text-light"  style="max-width:500px; min-width:35%;  ">
        <form action="req/login_scripts.php?p=registrate" method="post">
          <div class="text-center">
          <img class="rounded-circle mb-4 text-center" src="https://scontent-mia3-2.xx.fbcdn.net/v/t1.0-9/18402995_1574837829206969_5325005342584625522_n.jpg?_nc_cat=105&_nc_ht=scontent-mia3-2.xx&oh=03ec280f7a16f05eeb644d506d865858&oe=5C715DA4" alt="" width="60%">
        </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputNombre">Nombre</label>
              <input type="text" class="form-control" name="inputNombre" placeholder="Nombre">
            </div>
            <div class="form-group col-md-8">
              <label for="inputApellidos">Apellidos</label>
              <input type="text" class="form-control" name="inputApellidos" placeholder="Apellidos">
            </div>
          </div>
           <div class="form-row">
            <div class="form-group col-md-8">
              <label for="inputUsername">Username</label>
              <input pattern="[a-zA-Z0-9_]{7,25}" type="text" class="form-control" name="inputUsername" placeholder="Username">
            </div>
            <div class="form-group col">
              <label for="inputUsername">&nbsp;</label>
              <span id="example" type="button" class="btn btn-secondary col" data-toggle="tooltip" data-placement="right" title="Requisitos:
-8 caracteres o más
-a-zA-Z0-9_
">
              Formato
            </span>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" name="inputEmail" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control" name="inputPassword" placeholder="Password">
            </div>
          </div>
          <div class="text-center">
          <button type="submit" class="btn btn-lg btn-primary btn-block">Regístrate</button>
        </form>
    </main>
    
    <!-- Footer -->
    <?php
      include("req/footer.php");
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>