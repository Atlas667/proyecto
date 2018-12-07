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
        <main role="main container">
            <br />
            <br />
            <br />
            <div class="row"> 
                <div id="commentsContainer" class="col-em-6  mb-4 bg-dark text-light rounded">

                  <div id="comments" style="overflow:auto;">

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

                  <div class="col-em-6 card mb-4">
                    <div class="card-body d-flex flex-column align-items-start">
                      <strong class="d-inline-block mb-2 text-primary">World</strong>
                      <h3 class="mb-0">
                        <a class="text-dark" href="#">Featured post</a>
                      </h3>
                      <div class="mb-1 text-muted">Nov 12</div>
                      <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a href="#">Continue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_167842a1113%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_167842a1113%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2258%22%20y%3D%22130.7%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
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
        <script>
        function starChecker(){  



        }
      </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArDvXvRqYWu_of-pXY5l72_kikL6CRDrE&callback=initMap" async defer></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
    </body>


</html>
