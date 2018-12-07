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
    
    <body onload='starChecker()'>
        <main role="main">
            <br />
            <br />
            <br />
            <div class="row" style="width:100%;"> 
                <div id="commentsContainer" class="container col-lg-6 mb-4 bg-dark text-light rounded">

                  <div class="container" id="comments" style="overflow:auto;">

                    <h6 class="pt-3 border-bottom border-gray pb-2 mb-0">Comentarios</h6>
                    <?php
                      include("req/postComments.php");
                    ?>

                  </div>


                    <br />
        
                  <?php
                    if($loggedIn){
                      include("req/commentSubmitForm.php");
                    }
                  ?>

                </div>

                  <div class="container card col-lg-6 mb-4">
                    <div class="card-body d-flex flex-column align-items-start">
                      <h3 class="mb-0">
                        <a class="text-dark" href="#">Visitanos en:</a>
                      </h3>
                      <div class="mb-1 text-muted">Nov 12</div>
                      <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>

                
            </div>


              <!-- mapa google -->

            <div id="map" class="">
                <div id="googleMap" style="height:400px; width:100%;"></div>
                
                <script>
                    var map;
                    function initMap() {
                        map = new google.maps.Map(document.getElementById('googleMap'), {
                         center: {lat: 18.010440, lng: -66.627709},
                         zoom: 19,
                        });
                    }
                </script>
            </div>

        </main>
        <!-- Footer -->
        <?php
          include("req/footer.php");
        ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArDvXvRqYWu_of-pXY5l72_kikL6CRDrE&callback=initMap" async defer></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
    </body>


</html>
