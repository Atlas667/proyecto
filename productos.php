<!DOCTYPE html>
<html>
 
    <head>
        <title>Millenium Tint & Design</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    
    <?php
      include "req/nav.php";
    ?>
    
    <body style="margin-top:5%">
        
        <main role="main" class="container">
            
            <section class="jumbotron text-center">
                <div class="container">
                  <h1 class="jumbotron-heading">Productos</h1>
                  <p class="lead text-muted">Selección amplia de productos para autos.</p>
                  <p>
                    <a href="login.html" class="btn btn-primary my-2">Log in</a>
                    <a href="index.php?p=Checkout" class="btn btn-success my-2">Checkout</a>
                  </p>
                </div>
            </section>
            
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                  <div class="image">
                    <img style=" max-width: 100%;max-height: 100%" src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fimages-na.ssl-images-amazon.com%2Fimages%2FG%2F01%2Faplusautomation%2Fvendorimages%2F8d73a6eb-0ee9-43d1-8ef8-0bda3aa38ec7.png._CB272198985_.png&f=1">
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">$7</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li><h4>Banett Jackson</h4></li>
                      <li><h4>Brillo Para Gomas</h4></li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Añadir a carrito</button>
                  </div>
                </div>
                <div class="card mb-4 shadow-sm">
                  <div class="image">
                        <img style=" max-width: 100%;max-height: 100%" src="https://images-na.ssl-images-amazon.com/images/I/91V-yuc3mML._SL1500_.jpg">
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">$10</h1>
                    <ul class="list-unstyled mt-3 mb-4 my-0 font-weight-normal">
                      <li><h4>Esponja de Carro</h4></li>
                      <li><h4>Microfibra</h4></li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Añadir a carrito</button>
                  </div>
                </div>
                <div class="card mb-4 shadow-sm">
                  <div class="image">
                    <img style=" max-width: 100%;max-height: 100%" src="https://www.vividracing.com/wm.php/images/bremjcal6piston2piece380mmdrilledred.jpg">
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">$100</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li><h4>Tapas de Freno Brembo</h4></li>
                      <li><h4></h4></li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Añadir a carrito</button>
                  </div>
                </div>
            </div>
        </main>
        
        <!-- Footer -->
        <?php
          include("req/footer.php");
        ?>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </body>


</html>
