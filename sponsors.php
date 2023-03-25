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
        width: 55%;
        width: 55%;
      }
      #gold-logo {
        width: 100%;
        max-width: 600px;
        height: 100%;
        max-height: 550px;
      }
      #silver-logo {
        width: 40%;
        height: 40%;

        /*width: 100%;
        max-width: 300px;
        height: 100%;
        max-height: 150px;
        */
      }
      #strategic-acad-logo {
        width: 100%;
        max-width: 300px;
        height: 100%;
        max-height: 200px;
      }
      #auspices-logo {
        width: 100%;
        max-width: 275px;
        height: 100%;
        max-height: 150px;
      }
      #comms-logo {
        width: 100%;
        max-width: 200px;
        height: 100%;
        max-height: 150px;
      }
      #acad-accel-logo {
        width: 100%;
        max-width: 400px;
        height: 100%;
        max-height: 350px;
      }
      #community-logo {
        width: 100%;
        max-width: 250px;
        height: 100%;
        max-height: 200px;
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
          border: none;
          border-top: unset;
          height: 0.5px;
          width: 90%;
          
          margin-bottom: 35px;
       
          /* Set the hr color */
          color: #131d25; /* old IE */
          background-color: #131d25; /* Modern Browsers */
      }
      
      .tier-hr{
          border: none;
          border-top: unset;
          height: 0.5px;
          width: 75%;
          
          margin-top: 35px;
          margin-bottom: 35px;
       
          /* Set the hr color */
          color: #131d25; /* old IE */
          background-color: #131d25; /* Modern Browsers */ 
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
          background-image: url(img/banner/banner-03.png);
          background-repeat: no-repeat;
          background-size: cover; height: 344px;
                               margin-bottom: 10px;
          ">
          <div class="col">
             <h1 class="section-header competition-text">OUR SUPPORTERS</h1>
          </div>
        </div>
      </section>
      
      <br><br><br>
    
      <!--CORPORATE-->
      <section>
        <div class="row">
          <div class="col">
            <h1 class="para text-center gradient-text" id="team-section">Corporate Sponsors</h1>
          </div>
        </div>
        <div class="row justify-content-center">
          <hr class="team-hr">
        </div>
        <br>
        
        <div class="row align-items-center">
          <div class="col-sm-1 col-md-12 col-lg-3">
            <img src="/2023/svg/diamond.svg"/>
          </div>
          <div class="col-sm-1 col-md-12 col-lg-9">
            <div class="row justify-content-center align-items-center">
              <div class="col-sm-1 col-md-6">
                <a href="https://www.capitalship.gr/"><img style="max-width: 100%; height: auto;"src="/2023/img/sponsors/capital.png"></a>
              </div>
              <div class="col-sm-1 col-md-6">
                <a href="https://www.onassis.org/"> <img style="max-width: 100%; height: auto;"src="/2023/img/sponsors/onassis.png"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <hr class="tier-hr">
        </div>
        
        <div class="row align-items-center">
          <div class="col-sm-1 col-md-12 col-lg-3">
            <img src="/2023/svg/gold.svg"/>
          </div>
          <div class="col-sm-1 col-md-12 col-lg-9">
            <div class="row justify-content-center align-items-center">
              <div class="col-sm-1 col-md-6">
                <a href="http://foley.com/"> <img style="max-width: 70%; height: auto;"src="/2023/img/sponsors/foleylardner.png"></a>
              </div>
            </div>
            <div class="row justify-content-center align-items-center">
              <div class="col-sm-1 col-md-6">
                <a href="https://www.seanergymaritime.com/en"> <img style="max-width: 70%; height: auto;"src="/2023/img/sponsors/seanergy.jpeg"></a>
              </div>
              <div class="col-sm-1 col-md-6">
                <a href="https://www.unitedmaritime.gr/en"> <img style="max-width: 70%; height: auto;"src="/2023/img/sponsors/unitedmaritime.jpeg"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <hr class="tier-hr">
        </div>
      
        <div class="row align-items-center">
          <div class="col-sm-1 col-md-12 col-lg-3">
            <img src="/2023/svg/silver.svg"/>
          </div>
          <div class="col-sm-1 col-md-12 col-lg-9">
            <div class="row justify-content-center align-items-center">
              <div class="col-sm-1 col-md-4">
                <a href="https://shopflix.gr/"> <img style="max-width: 100%; height: auto;"src="/2023/img/sponsors/shopflix.png"></a>
              </div>
              <div class="col-sm-1 col-md-4">
                <a href="https://www.thesignalgroup.com/"> <img style="max-width: 100%; height: auto;"src="/2023/img/sponsors/signal.png"></a>
              </div>
              <div class="col-sm-1 col-md-4">
                <a href="https://www.moh.gr/en/"> <img style="max-width: 100%; height: auto;" src="/2023/img/sponsors/motoroil.jpeg"></a>
              </div>
            </div>
            <div class="row justify-content-center align-items-center">
              <div class="col-sm-1 col-md-4">
                <a href="https://www.advent.energy/"><img style="max-width: 100%; height: auto" src="/2023/img/sponsors/advent.png"></a>
              </div>
              <div class="col-sm-1 col-md-4">
                <a href="https://deddie.gr/en/"> <img style="max-width: 100%; height: auto;" src="/2023/img/sponsors/hedno.png"></a>
              </div>
              <div class="col-sm-1 col-md-4">
                <a href="https://www.titan-cement.com/"> <img style="max-width: 70%; height: auto;" src="/2023/img/sponsors/titan.jpeg"></a>
              </div>
            </div>
            <div class="row justify-content-center align-items-center">
              <div class="col-sm-1 col-md-4">
                <a href="https://www.microsoft.com/el-gr/"> <img style="max-width: 75%; height: auto;" src="/2023/img/sponsors/Microsoft.png"></a>
              </div>
              <div class="col-sm-1 col-md-4">
                <a href="https://www.microsoft.com/el-gr/"> <img style="max-width: 70%; height: auto;" src="/2023/img/sponsors/MicrosoftTeams.png"></a>
              </div>
              <div class="col-sm-1 col-md-4">
                <a href="https://www.eurobank.gr/en/group/esg-environment-society-governance/society/egg-enter-grow-go"> <img style="max-width: 60%; height: auto;" src="/2023/img/sponsors/EGG-Eurobank_logo.png"></a>
              </div>
            </div>
            <div class="row justify-content-center align-items-center">
              <div class="col-sm-1 col-md-4">
                <a href="https://www.ey.com/en_gr"> <img style="max-width: 80%; height: auto;" src="/2023/img/sponsors/ey.png"></a>
              </div>
              <div class="col-sm-1 col-md-4">
                <a href="https://www.hillintl.com/"> <img style="max-width: 80%; height: auto;" src="/2023/img/sponsors/HIL.png"></a>
              </div>
              <div class="col-sm-1 col-md-4">
                <a href="https://www.kotsovolos.gr/"> <img style="max-width: 80%; height: 30%;" src="/2023/img/sponsors/dixons.png"></a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row justify-content-center">
          <hr class="tier-hr">
        </div>
        
        <div class="row align-items-center">
          <div class="col-sm-1 col-md-12 col-lg-3">
            <img src="/2023/svg/associates.svg"/>
          </div>
          <div class="col-sm-1 col-md-12 col-lg-9">
            <div class="row justify-content-center align-items-center">
              <div class="col-sm-1 col-md-6">
                <a href="https://www.libra.com/en/"><img style="max-width: 60%; height: auto;" src="/2023/img/sponsors/libragroup.png"></a>
              </div>
              <div class="col-sm-1 col-md-6">
                <a href="https://www.octaneconsultants.com/"> <img style="max-width: 60%; height: auto;" src="/2023/img/sponsors/octane.jpeg"></a>
              </div>
            </div>
            <div class="row justify-content-center align-items-center">
              <div class="col-sm-1 col-md-6">
                <a href="https://kglawfirm.gr/"> <img style="max-width: 70%; height: auto;" src="/2023/img/sponsors/kg.png"></a>
              </div> 
              <div class="col-sm-1 col-md-6">
                <a href="https://www.quest.gr/en/the-group"> <img style="max-width: 70%; height: auto;" src="/2023/img/sponsors/iQ-QG.jpeg"></a>
              </div> 
            </div>
            <div class="row justify-content-center align-items-center">
              <div class="col-sm-1 col-md-6">
                <a href="https://bigpi.vc/"> <img style="max-width: 45%; max-height: 45%;" src="/2023/img/sponsors/bigpi.png"></a>
              </div> 
            </div>
          </div>
        </div>
        
        <div class="row justify-content-center">
          <hr class="tier-hr">
        </div>
        
        <div class="row align-items-center">
          <div class="col-sm-1 col-md-12 col-lg-3">
            <img src="/2023/svg/supporters.svg"/>
          </div>
          <div class="col-sm-1 col-md-12 col-lg-9">
           <div class="row justify-content-center align-items-center">
              <div class="col-sm-1 col-md-6">
                <a href="https://mellongroup.com/"> <img style="max-width: 45%; max-height: 45%;" src="/2023/img/sponsors/mellon.jpeg"></a>
              </div> 
              <div class="col-sm-1 col-md-6">
                <a href="https://www.infobip.com/"> <img style="max-width: 70%; height: auto;" src="/2023/img/sponsors/infobip.png"></a>
              </div> 
            </div>
            <div class="row justify-content-center align-items-center">
              <div class="col-sm-1 col-md-6">
                <a href="https://www.qualco.eu/"> <img style="max-width: 50%; height: auto;" src="/2023/img/sponsors/qualco.png"></a>
              </div> 
              <div class="col-sm-1 col-md-6">
                <a href="https://hdbi.gr/en/"> <img style="max-width: 70%; height: auto;" src="/2023/img/sponsors/hdbi.png"></a>
              </div> 
            </div>
            <div class="row justify-content-center align-items-center">
              <div class="col-sm-1 col-md-6">
                <a href="https://tsek.teiresias.gr/el/Home"><img style="max-width: 70%; height: auto;" src="/2023/img/sponsors/tiresias.jpeg"></a>
              </div>
            </div>
          </div>
        </div>
        
        
        <div class="row justify-content-center">
          <hr class="tier-hr">
        </div>
        
        <div class="row align-items-center">
          <div class="col-sm-1 col-md-12 col-lg-3">
            <img src="/2023/svg/mitef-greece-alum.svg"/>
          </div>
          <div class="col-sm-1 col-md-12 col-lg-9">
             <div class="row justify-content-center align-items-center no-gutters">
              <div class="col-sm-1 col-lg-6">
                <a href="https://alumnireach.com/"> <img style="max-width: 40%; height: auto;" src="/2023/img/sponsors/ar.png"></a>
              </div>
              <div class="col-sm-1 col-lg-6">
                <a href="https://www.thesarmproject.com/"> <img style="max-width: 40%; height: auto;" src="/2023/img/sponsors/sarm.jpeg"></a>
              </div>
              <div class="col-sm-1 col-lg-6">
                <a href="https://narratologies.com/"> <img style="max-width: 50%; height: auto;" src="/2023/img/sponsors/naratologies.jpg"></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!--DONORS-->
      <section>
        <div class="row">
          <div class="col">
            <h1 class="para text-center gradient-text" id="team-section">Donors</h1>
          </div>
        </div>
        <div class="row justify-content-center">
          <hr class="team-hr">
        </div>
        <br>
         <div class="row justify-content-center align-items-center">
           <div class="col-sm-1 col-lg-6">
            <a href="https://www.latsis-foundation.org/eng"><img style="max-width: 70%; height: auto;" src="/2023/img/sponsors/latsis.jpeg"></a>
          </div>
          <div class="col-sm-1 col-lg-6">
            <a href="https://www.thepeoplestrust.org/"><img style="max-width: 70%; height: auto;" src="/2023/img/sponsors/tpt.png"></a>
          </div>
                                                                                                                               
        </div>
      </section>
      
      <section>
        <div class="row">
          <div class="col">
            <h1 class="para text-center gradient-text" id="team-section">Individual Donors</h1>
          </div>
        </div>
        <div class="row justify-content-center">
          <hr class="team-hr">
        </div>
        <br>
         <div class="row justify-content-center align-items-center">
           <div class="speaker col-sm-6 col-md-4 col-lg-3">
             <a href="https://www.www.miltos.com"> Miltos Kambourides
             <img class="speaker-picture" src="img/sponsors/MiltosKambourides.jpeg">
             </a>
            
          </div>
                                                                                                                               
        </div>
      </section>
      
      <!--ACADEMIC PARTNERS-->
      <section>
        <div class="row">
          <div class="col">
            <h1 class="para text-center gradient-text" id="team-section">Academic Partners</h1>
          </div>
        </div>
        <div class="row justify-content-center">
          <hr class="team-hr">
        </div>
        <br>
        
        <div class="row white-bg logo d-flex justify-content-center">
          <div class="col-sm-1 col-md-6">
            <a href="https://scienceagora.eu/about/"><img style="max-width: 40%; height: auto;" src="/2023/img/sponsors/scienceagora.png"></a>
          </div>
          <div class="col-sm-1 col-md-6">
            <a href="https://www.acg.edu/"><img style="max-width: 30%; height: auto;" src="/2023/img/sponsors/ACG.png"></a>
          </div>
        </div>
        <div class="row white-bg logo d-flex justify-content-center">
          <div class="col-sm-1 col-md-6">
            <a href="https://www.mindev.gov.gr/?lang=en"><img style="max-width: 50%; height: auto;" src="/2023/img/sponsors/acci-01.png"></a>
          </div>
          <div class="col-sm-1 col-md-6">
            <a href="https://www.mindev.gov.gr/?lang=en"><img style="max-width: 65%; height: auto;" src="/2023/img/sponsors/acci-02.jpeg"></a>
          </div>
        </div>
        <div class="row white-bg logo d-flex justify-content-center">
          <div class="col-sm-1 col-md-6">
            <a href="https://www.dmrid.gov.cy/dmrid/research.nsf/home_en/home_en?openform"><img style="max-width: 65%; height: auto;" src="/2023/img/sponsors/dmrid.jpeg"></a>
          </div>
          <div class="col-sm-1 col-md-6">
            <a href="https://praxinetwork.gr/"><img style="max-width: 65%; height: auto;" src="/2023/img/sponsors/PRAXILogoEN.PNG"></a>
          </div>
        </div>
      </section>
                                                                                                                    
      <!--COMMUNICATION PARTNERS-->
      <section>
        <div class="row">
          <div class="col">
            <h1 class="para text-center gradient-text" id="team-section">Communication Partners</h1>
          </div>
        </div>
        <div class="row justify-content-center">
          <hr class="team-hr">
        </div>
        <br>
                             
        <div class="row justify-content-center align-items-center">
          <div class="col-sm-1 col-md-5">
            <a href="https://www.kathimerini.gr/"><img style="max-width: 80%; height: auto;" src="/2023/img/sponsors/kathimerini.png"></a>
          </div>
          <div class="col-sm-1 col-md-5">
            <a href="https://www.ogilvy.com/"><img style="max-width: 40%; height: auto;" src="/2023/img/sponsors/ogilvy.png"></a>
          </div>
        </div>
      </section>
                                                                                                          
      <!--COMMUNITY PARTNERS-->
      <section>
        <div class="row">
          <div class="col">
            <h1 class="para text-center gradient-text" id="team-section">Community Partners</h1>
          </div>
        </div>
        <div class="row justify-content-center">
          <hr class="team-hr">
        </div>
        <br>
                             
        <div class="row justify-content-center align-items-center">
          <div class="col-sm-1 col-md-5">
            <a href="https://www.eventora.com/"><img style="max-width: 30%; height: auto;" src="/2023/img/sponsors/eventora.png"></a>
          </div>
          <div class="col-sm-1 col-md-5">
            <a href="https://seeders.gr/"><img style="max-width: 30%; height: auto;" src="/2023/img/sponsors/seeders.png"></a>
          </div>
        </div>
        <div class="row justify-content-center align-items-center">
          <div class="col-sm-1 col-md-4">
            <a href="http://best.ntua.gr/index.php/en/home_eng/"><img style="max-width: 50%; height: auto;" src="/2023/img/sponsors/best.png"></a>
          </div>
          <div class="col-sm-1 col-md-4">
            <a href="https://unistudents.gr/"><img style="max-width: 50%; height: auto;" src="/2023/img/sponsors/UniStudents.jpeg"></a>
          </div>
          <div class="col-sm-1 col-md-4">
            <a href="https://businesseventscalendar.gr/?lang=en"><img style="max-width: 50%; height: auto;" src="/2023/img/sponsors/EC.jpg"></a>
          </div>
        </div>
        <div class="row justify-content-center align-items-center">
          <div class="col-sm-1 col-md-5">
            <a href="https://www.innovativegreeks.gr/"><img style="max-width: 50%; height: auto;" src="/2023/img/sponsors/ig-sev.png"></a>
          </div>
          <div class="col-sm-1 col-md-5">
            <a href="http://eestec.ntua.gr/"><img style="max-width: 30%; height: auto;" src="/2023/img/sponsors/eestec.png"></a>
          </div>
        </div>
        <div class="row justify-content-center align-items-center">
          <div class="col-sm-1 col-md-4">
            <a href="https://www.globalshapers.org/"><img style="max-width: 50%; height: auto;" src="/2023/img/sponsors/gsah-logo.png"></a>
          </div>
          <div class="col-sm-1 col-md-4">
            <a href="https://www.kemel.gr/"><img style="max-width: 50%; height: auto;" src="/2023/img/sponsors/KEMEL-logo.jpg"></a>
          </div>
          <div class="col-sm-1 col-md-4">
            <a href="https://www.endeavor.org.gr/"><img style="max-width: 50%; height: auto;" src="/2023/img/sponsors/Endeavor-logo.png"></a>
          </div>
        </div>
      </section>
      
      <!--UNDER THE AUSPICES-->
      <section>
        <div class="row">
          <div class="col">
            <h1 class="para text-center gradient-text" id="team-section">Under the Auspices</h1>
          </div>
        </div>
        <div class="row justify-content-center">
          <hr class="team-hr">
        </div>
        <br>
        
        <div class="row justify-content-center align-items-center">
          <div class="col-sm-1 col-md-4">
            <a href="https://www.mindev.gov.gr/?lang=en"><img style="max-width: 70%; height: auto;" src="/2023/img/sponsors/MinDev.png"></a>
          </div>
          <div class="col-sm-1 col-md-4">
            <a href="https://www.minedu.gov.gr/"><img style="max-width: 70%; height: auto;"src="/2023/img/sponsors/MinEdu.png"></a>
          </div>
          <div class="col-sm-1 col-md-4">
            <a href="https://mindigital.gr/"><img style="max-width: 70%; height: auto;" src="/2023/img/sponsors/MinDigGov.png"></a>
          </div>
        </div>
        <div class="row justify-content-center align-items-center">
          <div class="col-sm-1 col-md-4">
            <a href="https://ypergasias.gov.gr/"><img style="max-width: 70%; height: auto;" src="/2023/img/sponsors/MinLSA.png"></a>
          </div>
          <div class="col-sm-1 col-md-4">
            <a href="https://www.patt.gov.gr/"><img style="max-width: 50%; height: 50%;" src="/2023/img/sponsors/attica.png"></a>
          </div>
        </div>
      </section>
              
      
                                                                                           
      
    </body>
</html>
<?php include('footer.php');
?>
