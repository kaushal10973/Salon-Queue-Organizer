<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="Design/css/index1.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/6e6cdff1d5.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <?php

        include "connect.php";
        include "Includes/templates/header.php";
        include "Includes/templates/navbar-home.php";

    ?>
    <section class="colored-section" id="title">

        <div class="container-fluid">

            <div>
                <h2 class="salon-title-01">VIT Bhopal</h2>
                <h3 class="salon-title-02">Salon Queue Organizer</h3>
            </div>
    
            <div class="row">
                <div class="col-lg-6"></a>
                    <h1 class="big-heading">Elevate your style, where every strand meets sophistication.</h1>
                    <a href="index_boys.php"><button type="button" class="btn btn-lg btn-dark download-button">Boys Hostel</button></a>
                    <a href="index_girls.php"><button type="button" class="btn btn-lg btn-outline-light btn-danger download-button-girl">Girls Hostel</button></a>
                </div>
                <div class="col-lg-6">
                    <img class="title-image" src="Design/images/main_barber.jpg" alt="iphone-mockup">
                </div>
        </div>
    </div>

      <!-- Features -->

  <section class="white-section" id="features">
    <div class="container-fluid">
    <div class="row icon-row">

      <div class="col-fluid col-lg-4 feature-box" >
        <h3 class="feature-col"><i class="feature-icon fa-solid fa-circle-check  fa-3x"></i></h3>
        <h3 class="feature-col">Easy to use.</h3>
      </div>

      <div class="col-fluid col-lg-4 feature-box">
        <h3 class="feature-col"><i class="feature-icon fa-solid fa-bullseye fa-3x"></i></h3>
        <h3 class="feature-col">Time saving.</h3>
     </div>

      <div class="col-fluid col-lg-4 feature-box">
        <h3 class="feature-col"><i class="feature-icon fa-solid fa-heart fa-3x"></i></h3>
        <h3 class="feature-col">Resource optimization.</h3>
        </div>
    </div>
  </div>
  </section>
  
    </section>

    <section class="widget_section" id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <img style="width: 250px; height: 60px;" class="salon-logo logo-bottom" src="Design/images/barbershop_logo.jpg" alt="Brand">
                        <p>
                            Our barbershop is the created for those who appreciate premium quality, time and flawless look.
                        </p>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                     <div class="footer_widget">
                        <h3>Headquarters</h3>
                        <p>
                            VIT Bhopal University.
                        </p>
                        <p>
                            vitsalon@barbershop.com
                            <br>
                            (+91) 99075 58683    
                        </p>
                     </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <h3>
                            Opening Hours
                        </h3>
                        <p>Everyday 09:00am - 07:00pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <h3>Subscribe to our contents</h3>
                        <div class="subscribe_form">
                            <form action="#" class="subscribe_form" novalidate="true">
                                <input type="email" name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address...">
                                <button type="submit" class="submit">SUBSCRIBE</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    </body>
    </html>
  
</body>
</html>

<!-- FOOTER  -->

<?php include "Includes/templates/footer.php"; ?>