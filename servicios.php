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
    
    <body style="margin-top: 5%">
        
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
              <h1 class="display-4 font-weight-normal">Servicios</h1>
              <p class="lead font-weight-normal">Ofrecemos servicios de calidad a un precio accesible.</p>
              <a class="btn btn-outline-secondary" href="#">Coming soon</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>

        <div class="tab-content">
          <div class="tab-pane fade show active" id="home" role="tabpanel">
            <div class="my-3 py-3">
                <h2 class="display-5">Lavado Sencillo</h2>
                <p class="lead">And an even wittier subheading.</p>
              </div>
              <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel">
            <div class="my-3 py-3">
                <h2 class="display-5">Lavado Sencillo</h2>
                <p class="lead">And an even wittier subheading.</p>
              </div>
              <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
          </div>
          <div class="tab-pane fade" id="messages" role="tabpanel">
            <div class="my-3 py-3">
                <h2 class="display-5">Lavado Sencillo</h2>
                <p class="lead">And an even wittier subheading.</p>
              </div>
              <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
          </div>
          <div class="tab-pane fade" id="settings" role="tabpanel">
            <div class="my-3 py-3">
                <h2 class="display-5">Lavado Sencillo</h2>
                <p class="lead">And an even wittier subheading.</p>
              </div>
              <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
          </div>
        </div>

        <script>
          $('#myList a').on('click', function (e) {
          e.preventDefault()
          $(this).tab('show')
          })
        </script>
        
        <!-- Footer -->
        <?php
          include("req/footer.php");
        ?>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </body>



</html>
