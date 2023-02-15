<?php
  include('navbar.php');
  include('header.php');

?>
    <style>
      /*SPONSOR LOGO & LAYOUT*/
      .sponsor-category{
        margin: 0;
        padding: 0;
        text-align: center;
      }
      .sponsor-hr{
        border-top: 1px solid #dd4f33 !important;
        margin: 0 auto;
        width:30%;
      }
      #diamond-logo {
        width: 100%;
        max-width: 900px;
        height: 100%;
        max-height: 850px;
      }
      #gold-logo {
        width: 100%;
        max-width: 600px;
        height: 100%;
        max-height: 550px;
      }
      #silver-logo {
        width: 100%;
        max-width: 500px;
        height: 100%;
        max-height: 450px;
      }
      #strategic-acad-logo {
        width: 100%;
        max-width: 500px;
        height: 100%;
        max-height: 450px;
      }
      #comms-logo, #acad-accel-logo, #community-logo {
        width: 100%;
        max-width: 400px;
        height: 100%;
        max-height: 350px;
      }
      #acad-assoc-logo {
        width: 100%;
        max-width: 300px;
        height: 100%;
        max-height: 250px;
      }
      #associate-logo {
        width: 100%;
        max-width: 200px;
        height: 100%;
        max-height: 150px;
      }
      #supporter-logo, #acad-supporter {
        width: 100%;
        max-width: 100px;
        height: 100%;
        max-height: 50px;
      }
      
      
      .libra-logo, .scince-logo{
        margin-top: 30px !important;
      }
      
      /*GENERAL*/
     .team-hr{
          border-bottom: 2px solid rgba(100, 121, 162,0.3);
          border-top: unset;
          padding-bottom: 5px;
          color: #0e1e58;
          width: 90%;
          margin: 0 auto;
          margin-bottom: 20px;
      }
      .tier-hr{
          border-bottom: 2px solid rgba(100, 121, 162,0.3);
          border-top: unset;
          padding-bottom: 5px;
          color: #0e1e58;
          width: 50%;
          margin: 0 auto;
          margin-bottom: 20px;
      }
      .gradient-text{
          font-size: 35px !important;
      }
      .section-div {
          background-color: #131d25;
          height: 100%;
          max-height: 300px;
          padding: 1px;
      }
      .pt-1 {
        padding-top: 1.25rem!important;
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
        hr {
          height: 20px; 
          border: none;
          background-size: 20px 20px;
          width: 50%; 
        }
      }
    </style>

    <body>
      <!--SPONSORS-->
      <section class="startup-pitch">
        <div class="row" style="
          background-image: url(img/sponsors.png);
          background-repeat: no-repeat;
          background-size: cover; height: 344px;
                               margin-bottom: 10px;
          ">
          <div class="col">
             <h1 class="section-header competition-text">OUR SUPPORTERS</h1>
          </div>
        </div>
      </section>
      
    
      <!--CORPORATE-->
      <section>
        <div class="row">
          <div class="col">
            <h1 class="para text-center gradient-text" id="team-section">Corporate Sponsors</h1>
            <hr class="team-hr">
          </div>
        </div>
        <br>
        
        <div class="row white-bg logo d-flex justify-content-center">
          <div class="col-sm-1 col-md-12 ">
            <a href="https://capitalpartners.gr/"> <img id="diamond-logo" src="/2023/img/sponsors/capitalpartner-diamond.png"></a>
          </div>
        </div>
        
        <hr class="tier-hr">
        <div class="row white-bg logo d-flex justify-content-center">
          <div class="col-sm-1 col-md-12">
              <a href="https://shopflix.gr/"> <img id="silver-logo" src="/2023/img/sponsors/shopflix.png"></a>
          </div>
        </div>
        
        <hr class="tier-hr">
        <div class="row white-bg logo d-flex justify-content-center">
          <div class="col-sm-1 col-md-4">
            <a href="https://www.libra.com/en/"><img id="associate-logo" class="libra-logo" src="/2023/img/sponsors/libragroup.png"></a>
          </div>
        </div>
      
        <!--ACADEMIC PARNTERS-->
        <div class="row">
          <div class="col">
            <h1 class="para text-center gradient-text" id="team-section">Academic Partners</h1>
            <hr class="team-hr">
          </div>
        </div>
        
        <hr class="tier-hr">
        <div class="row white-bg logo d-flex justify-content-center">
          <div class="col-sm-1 col-md-4">
            <a href="https://scienceagora.eu/about/"><img id="strategic-acad-logo" class="scince-logo" src="/2023/img/sponsors/scienceagora.png"></a>
          </div>
        </div>
 
        
        <!--COMMUNICATION PARTNERS-->
        <div class="row">
          <div class="col">
            <h1 class="para text-center gradient-text" id="team-section">Communication Partners</h1>
            <hr class="team-hr">
          </div>
        </div>
        <div class="row white-bg logo d-flex justify-content-center">
          <div class="col-sm-1 col-md-4">
            <a href="https://www.kathimerini.gr/"><img id="comms-logo" class="scince-logo" src="/2023/img/sponsors/kathimerini.png"></a>
          </div>
          <div class="col-sm-1 col-md-4 mb-3">
            <a href="https://www.ogilvy.com/"><img id="comms-logo" class="scince-logo" src="/2023/img/sponsors/ogilvy.png"></a>
          </div>
        </div>

      
        <!--COMMUNITY PARTNERS-->
        <div class="row">
          <div class="col">
            <h1 class="para text-center gradient-text" id="team-section">Community Partners</h1>
            <hr class="team-hr">
          </div>
        </div>
        <div class="row white-bg logo d-flex justify-content-center">
          <div class="col-sm-1 col-md-4">
            <a href="https://www.mindev.gov.gr/?lang=en"><img id="community-logo" class="scince-logo" src="/2023/img/sponsors/eventora.png"></a>
          </div>
          <div class="col-sm-1 col-md-4">
            <a href="https://seeders.gr/"><img id="partner-logo" class="community-logo" src="/2023/img/sponsors/seeders.png"></a>
          </div>
        </div>
        
      </section>
    </body>
</html>
<?php include('footer.php');
?>
