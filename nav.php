<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">MTD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <?php
        $p;
        $menuList = ["Inicio", "Servicios", "Productos", "Contactanos", "Log in"];
        foreach($menuList as $s){
          if(isset($_SESSION["username"]) && $s == "Log in"){
             echo '<li class="nav-item nav-link">' . $s . '</a></li>';
          }
          elseif($p == $s){
            echo '<li class="nav-item"><a class="nav-link active" href="?p=' . $s . '">' . $s . '</a></li>';
          }
          else{
            echo '<li class="nav-item"><a class="nav-link" href="?p=' . $s . '">' . $s . '</a></li>';}
        }
      ?>
      <li class="nav-item navbar-right">
        <a class="nav-link" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
            <circle cx="9" cy="21" r="1"></circle>
            <circle cx="20" cy="21" r="1"></circle>
            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
          </svg>
          Cart
        </a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <?php
        if(isset($_SESSION["username"])){
            echo '<li class="nav-item"><a class="text-right btn btn-link" href="/req/login_scripts.php?p=logout">' . $_SESSION["username"] . '</a></li>';
          }
      ?>
    </ul>
  </div>
</nav>