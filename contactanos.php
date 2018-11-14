<!DOCTYPE html>
<html>
 
    <head>
        <title>Millenium Tint & Design</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    </head>
    
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.html">MTD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="servicios.html">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="productos.html">Productos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Contactanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Log in</a>
          </li>
        </ul>
    </div>
</nav>
    
    <body style="margin-top:5%">
        
        
        <div id="googleMap" style="width:100%;height:400px;"></div>
        
        <script>
            function myMap() {
            var mapProp= {
                center:new google.maps.LatLng(18.010440, -66.627709),
                zoom:19,
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
            }
        </script>
        
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
        
        <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </body>


</html>
