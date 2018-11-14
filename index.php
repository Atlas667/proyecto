<!DOCTYPE html>
<html>
 
<head>
    <title>Millenium Tint & Design</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">MTD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">

        	<?php
        		$menuList = ["Inicio", "Servicios", "Productos", "Contactanos", "Log in"];
        		foreach($menuList as $s){
        			echo '<li class="nav-item"><a class="nav-link" href="?p=' . $s . '">' . $s . '</a></li>';
        		}
        	?>
          <li class="nav-item navbar-right">
            <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                  Cart
            </a>
          </li>
        </ul>
    </div>
</nav>

<body style="margin-top: 3%">
    
    <div  style="padding-left: 20%;padding-right: 20%;background: #151515" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img height="550" class="d-block w-100" src="https://scontent-mia3-1.xx.fbcdn.net/v/t1.0-9/42193764_2141534665870613_1246593839389474816_n.jpg?_nc_cat=103&oh=fc4f999a51e989c4047b87bb88055d71&oe=5C2A92FF" alt="First slide">
            </div>
            <div class="carousel-item">
                <img height="550" class="d-block w-100" src="https://scontent-mia3-1.xx.fbcdn.net/v/t1.0-9/31491133_1943750655649016_2398825675327799296_n.jpg?_nc_cat=100&oh=a63ab2bd079bb5ad8d48b9388581e91e&oe=5C21B737" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img height="550" class="d-block w-100" src="https://scontent-mia3-1.xx.fbcdn.net/v/t1.0-9/23376119_1761693563854727_3333197720334697167_n.jpg?_nc_cat=105&oh=fcacb822f3dc8c1d884a1607df93342b&oe=5C2481E9" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <div class="container marketing">
    
        <hr class="featurette-divider">
        
        <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading"> Lavado y detallado de carros </h2>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 300px;" src="http://hauteliving.com/wp-content/uploads/2014/09/Aventuras.jpeg" data-holder-rendered="true">
            </div>
        </div>
        
        <hr class="featurette-divider">
        
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Gran Variedad de fog lights. </h2>
            <p class="lead"></p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="https://www.carid.com/images/auer-automotive/products/stc-812.jpg" data-holder-rendered="true">
          </div>
        </div>
    
    </div>
    
    <footer class="footer">
        <div class="container text-center">
            <span class="text-muted">Millenium Tint & Design</span>
            </br>
            <span class="text-muted">Calle villa #301 Ponce, Puerto Rico</span>
            </br>
            <span class="text-muted">(787) 243-8373</span>
            </br>
            <!-- Add font awesome icons -->
            <a href="https://www.facebook.com/Millennium-Tint-and-Detailing-275699582454140/" class="fa fa-facebook"></a>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>




</html>
