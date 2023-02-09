<?php
  include('navbar.php');
  include('header.php');

?>
    <style>
    .pt-1 {
    padding-top: 1.25rem!important;
}
        .sponsor-hr{
            border-top: 1px solid#dd4f33 !important;
            margin: 0 auto;
            width:30%;
           
        }
        .team-hr{
            border-bottom: 2px solid rgba(100, 121, 162,0.3);
            border-top: unset;
            padding-bottom: 5px;
            color: #0e1e58;
            width: 60%;
            margin: 0 auto;
            margin-top: -12px;
        }
        .libra-logo, .scince-logo{
            margin-top: 30px !important;
        }
        .banner-margin{
            margin-top: 50px;
        }
        @media only screen and (max-width: 600px) {
            .white-bg{
                padding: 30px 0px !important;
            }
            .gradient-text {
                font-size: 25px !important;
            }
            .banner-margin{
                margin-top: 0px;
            }
            .logo{
                
            }
        }
    </style>
    <body>
        <!--SPONSORS-->
        <section class="startup-pitch">
         <div class="row" style="
            background-image: url(img/sponsors.png);
            background-repeat: no-repeat;
            background-size: cover;height: 344px;
            ">
            <div class="col">
               <h1 class="section-header competition-text">OUR SPONSORS </h1>
            </div>
         </div>
      </section>
      <section>
        <div class="row white-bg logo d-flex justify-content-center">
          <div class="col-sm-1 col-md-4 white-bg">
            <h1 class="para text-center gradient-text" class="banner-margin">Thank you to our Diamond Sponsors! </h1>
          </div>
          <div class="col-sm-1 col-md-4 white-bg">
            <a href=""> <img id="sponsor-logo" src="/2023/img/sponsors/capitalpartner-diamond.png"></a>
          </div>
        </div>
        
        <hr class="team-hr">
        
        <div class="row white-bg logo d-flex justify-content-center">
          <div class="col-sm-1 col-md-4 white-bg">
            <h1 class="para text-center gradient-text" class="banner-margin">Thank you to our Silver Sponsors! </h1>
          </div>
          <div class="col-sm-1 col-md-4 banner-margin">
              <a href=""> <img id="sponsor-logo" src="/2023/img/sponsors/shopflix.png"></a>
          </div>
        </div>
       
        <hr class="team-hr">
        
        <div class="row white-bg logo d-flex justify-content-center">
          <div class="col-sm-1 col-md-4 white-bg">
            <h1 class="para text-center gradient-text" class="banner-margin">Thank you to our Community, Design, and Global Acadamic Partners! </h1>
          </div>
          <div class="col-sm-1 col-md-4">
            <a href="https://www.libra.com/en/"><img id="sponsor-logo" class="libra-logo" src="/2023/img/sponsors/libragroup.png"></a>
          </div>
          <div class="col-sm-1 col-md-4">
            <a href=""><img id="sponsor-logo" class="scince-logo" src="/2023/img/sponsors/scienceagora.png"></a>
          </div>
          <div class="col-sm-1 col-md-4">
            <a href=""><img id="sponsor-logo" class="scince-logo" src="/2023/img/sponsors/kathimerini.png"></a>
          </div>
          <div class="col-sm-1 col-md-4">
            <a href=""><img id="sponsor-logo" class="scince-logo" src="/2023/img/sponsors/ogilvy.png"></a>
          </div>
          <div class="col-sm-1 col-md-4">
            <a href=""><img id="sponsor-logo" class="scince-logo" src="/2023/img/sponsors/eventora.png"></a>
          </div>
          <div class="col-sm-1 col-md-4">
            <a href=""><img id="sponsor-logo" class="scince-logo" src="/2023/img/sponsors/seeders.png"></a>
          </div>
        </div>
        
        <hr class="team-hr">
      </section>
    </body>
</html>
<?php include('footer.php');
?>
