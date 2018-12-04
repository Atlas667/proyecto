
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">MTD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <?php
        $p;
        $menuList = ["Inicio", "Servicios", "Productos", "Contactanos", "Log in", "Registrate"];
        foreach($menuList as $s){
          if($loggedIn && $s == "Log in" || $loggedIn && $s == "Registrate"){
             
          }
          elseif($p == $s){
            echo '<li class="nav-item"><a class="nav-link active" href="?p=' . $s . '">' . $s . '</a></li>';
          }
          else{
            echo '<li class="nav-item"><a class="nav-link" href="?p=' . $s . '">' . $s . '</a></li>';}
        }
      ?>
    </ul>
    <ul class="navbar-nav">
      <?php
        if($loggedIn){
            echo '<li class="nav-item"><a class="text-right btn btn-success" href="perfil.php">' . $_SESSION["username"] . '</a></li> &nbsp;&nbsp;&nbsp;';

            echo '<li class="nav-item"><a class="text-right btn btn-outline-danger" href="req/login_scripts.php?p=logout"> Log out </a></li>';
          }
      ?>
    </ul>
  </div>
</nav>
<br/ >
<br/ >