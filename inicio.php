<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- css for FB icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
 
    <title>MTD</title>
  </head>

  <?php
    include "req/nav.php";
  ?>
  
  <body>
    
    <main role="main">

      <div class="origin text-light">
        <div class="col-5 p-lg-5">
          <h1 class="font-weight-normal">Punny headline</h1>
          <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
          <a class="btn btn-outline-secondary" href="#">Coming soon</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

      <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center rounded bg-dark text-light">
          <div class="col-md-9 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Millenium Tint & Design</h1>
            <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
          </div>
          <img class=" rounded" style="max-width:100%;
max-height:100%;" ssrc="pics/car.jpg">
        </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Productos</h2>
            <p>MTD ofrece una gran variedad de productos para autos desde jabones hasta tapas de frenos. </p>
            <p><a class="btn btn-secondary" href="?p=Productos" role="button">Ver productos »</a></p>
          </div>
          <div class="col-md-4">
            <h2>Servicios</h2>
            <p>Ofrecemos lavado detallado, brillo, tintes industriales para autos, botes, residencias y comercios, luces "custom" y mucho más.</p>
            <p><a class="btn btn-secondary" href="?p=Servicios" role="button">Ver servicios »</a></p>
          </div>
          <div class="col-md-4">
            <h2>Calidad</h2>
            <p>Con servicios y productos de calidad, de seguro saldrás satisfecho.</p>
            <p><a class="btn btn-secondary" href="?p=Servicios" role="button">Ver servicios »</a></p>
          </div>
        </div>
      </div> <!-- /container -->

    </main>
    
    <!-- Footer -->
    <?php
      include("req/footer.php");
    ?>
  
  <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>
  
</html>
