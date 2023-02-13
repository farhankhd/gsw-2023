<?php
    // Require https
    if ($_SERVER['HTTPS'] != "on") {
        $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        header("Location: $url");
        exit;
        
    }
    $pageTitle = 'MIT Global Startup Workshop 2023 | Athens, Greece';
    $metaDescription = 'MIT Global Startup Workshop is coming to Greece in March 2023! GSW is an annual conference that aims to accelerate entrepreneurial ecosystems around the world, through workshops, mentorship and skills training. Grab your tickets now for an experience you will never forget!';
    $specificKeywords = 'entrepreneurial ecosystems';
    $headerMainPageImageSrc = 'img/banner/main.png';
    $headerTitle = 'MIT Global Startup Workshop 2023';
    $headerSubTitle = 'Athens, Greece';
    $classIndexMenu = 'active';
    
    //set headers to NOT cache a page
    header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
    header("Pragma: no-cache"); //HTTP 1.0
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

    $scripts = "<script src=\"2023/assets/js/scripts.js\"></script>";


    include('navbar.php');
    include('header.php'); ?>
    
    
        <?php   
            // echo '<script type ="text/JavaScript">';  
            // echo 'alert("Hello, fellow innovator! Our website is under rennovation. Please come back tommorow for updated information on GSW 2023!")';  
            // echo '</script>';  
        ?>  
<style>
    /*SPONSOR SECTION*/
    .sponsor-category{
        margin: 0;
        padding: 0;
        text-align: center;
    }
    .sponsor-hr{
        border-top: 1px solid#dd4f33 !important;
        margin: 0 auto;
        width:30%;
    }
    .libra-logo, .scince-logo{
        margin-top: 30px !important;
    }
    #diamond-logo {
        width: 100%;
        max-width: 500px;
        height: 100%;
        max-height: 450px;
    }
    #silver-logo {
        width: 100%;
        max-width: 300px;
        height: 100%;
        max-height: 250px;
    }
    #partner-logo {
        width: 100%;
        max-width: 150px;
        height: 100%;
        max-height: 80px;
    }
    @media only screen and (min-width: 480px) {
        .logo{
            padding-right: 113px;
        }
    }
    
    /*GENERAL*/
    .team-hr{
        border-bottom: 2px solid rgba(100, 121, 162,0.3);
        border-top: unset;
        padding-bottom: 5px;
        color: #0e1e58;
        width: 60%;
        margin: 0 auto;
        /*margin-bottom: 31px;*/
    }
    .banner-margin {
        margin-top: 50px;
    }
    @media only screen and (max-width: 600px) {
        div.main{
            padding:unset!important;
        }
        ul.white-bullet{
            padding: 0px 20px 0px;
        }
        #workshop_section, #why-attend-section {
            padding: 50px 20px 10px;
        }
        section {
            padding: 62px 0px 20px;
        }
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
            height: 40px; 
            border: none;
            background-size: 20px 20px;
            width: 50%; 
        }
        #gradient-text {
            text-align: center !important;
        }
    }
    #collab-logo {
        margin-bottom: 15px;
        width: 100%;
        min-width: 100px;
        max-width: 200px;
        height: 100%;
        min-height: 100px;
        max-height: 150px;
    }
</style>

        <!--LANDING OWL VISUAL + COUNTDOWN-->
        <div class='main'>
            <div class="row">
                <div class="col">
                    <img class="main-visual" src="../2023/img/main-logo.png" alt="logo" width="480" height="670">
                </div>
                <div class="col" style="text-align: center;  padding: 100px 0px 100px 0px;">
                    <h6 style="padding-top:20px">MIT GLOBAL STARTUP WORKSHOP</h6>
                    <input type="image" src="../2023/img/GSW_logo_white.png" alt="logo" width="250" height="75">
                    <h5>25TH ANNUAL CONFERENCE</h5>
                    <h4 class="bold-text"><span style="color: #00c0f2">ATHENS</span>, GREECE <br><span style="color: #00c0f2">MARCH 30-31</span>, 2023</h4>
                    <div class="countdown">
                        <div class="container-day light-text">
                            <h6 class="day light-text">Time</h6>
                            <h6>Day</h6>
                        </div>
                        <div class='container-hour'>
                            <h6 class='hour'>Time</h6>
                            <h6>Hour</h6>
                        </div>
                        <div class='container-minute'>
                            <h6 class='minute'>Time</h6>
                            <h6>Minute</h6>
                        </div>
                        <div class='container-second'>
                            <h6 class='second'>Time</h6>
                            <h6>Second</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php //include("registration.php"); ?>
        
         <!--REGISTRATION-->
        <div class="section" id="registration-section">
            <div class="row text-center">
                <div class="col-lg-12">
                    <br />
                    <div class="white-bg text-center">
                        <h1 class="para text-center gradient-text">Are you ready for MIT Global Startup Workshop 2023?</h1>
                    <p class="light-text light-bg-dark-text">Don't wait! <strong class="light-bg-dark-text">Buy your tickets</strong> now for a lifelong innovative experience</p>
                    </div>
                    <a class="btn btn-default register-btn"onClick="fbq('trackCustom', 'Home_Register Now_GSW’);" href="http://eventora.gr/mit-gsw" role="button">REGISTER TO ATTEND</a>
                    <br />
                </div>
               
            </div>
        </div>
        
        
        <!--BACKGROUND-->
        <!--<div class="section-div">-->
        <!--    <div></div>-->
            <!--<img id="element1" src="../img/elements/Asset%201.svg"> 
        <!--    <img id="element2" src="../img/elements/Asset%202.svg">-->
        <!--</div>-->
        <section id="workshop_section">
            <div class="row white-bg">
                <div class="col white-bg">
                    <h1 class="gradient-text" style="text-align: center">25 Years Strong</h1>
                    
                    <p class="para light-text light-bg-dark-text"> MIT Global Startup Workshop (MIT GSW) is an annual multi-day conference that brings together entrepreneurs, students, investors, and key stakeholders from across the world to accelerate the entrepreneurial ecosystem of a host region. Through a series of tailored workshops, panels and keynote speakers, MIT GSW aims to share the entrepreneurial practices that have empowered thousands of companies to launch from MIT. MIT GSW is organized by a diverse group of graduate students and is strongly supported by the MIT entrepreneurial ecosystem including the MIT Legatum Center for Development &#38; Entrepreneurship, the Martin Trust Center for MIT Entrepreneurship, and the MIT Regional Entrepreneurship Accelerator Program (MIT REAP). Since 1998, our non-profit, student-run organization has held 22 international workshops across 6 continents, and has attracted participants from over 70 nations. </p>
                </div>
            </div>
        </section>

        <?php //include("sponsors.php"); ?>

        <!--SPONSORS-->
        <section class="startup-pitch">
         <div class="row" style="
            background-image: url(img/sponsors.png);
            background-repeat: no-repeat;
            background-size: cover; height: 344px;
                                 margin-bottom: 10px;
            ">
            <div class="col">
               <h1 class="section-header competition-text">OUR SPONSORS </h1>
            </div>
         </div>
      </section>
      <section>
        <div class="row white-bg justify-content-center">
          <div class="col">
            <h1 class="gradient-text sponsor-category mb-3">Thank you to our Diamond Sponsors! </h1>
          </div>
        </div>
        <div class="row white-bg logo d-flex justify-content-center">
          <div class="col-sm-1 col-md-12 ">
            <a href=""> <img id="diamond-logo" src="/2023/img/sponsors/capitalpartner-diamond.png"></a>
          </div>
        </div>
        
        <hr class="team-hr">
        <br>
        
        <div class="row white-bg justify-content-center">
          <div class="col">
            <h1 class="gradient-text sponsor-category mb-3" style="">Thank you to our Silver Sponsors! </h1>
          </div>
        </div>
        <div class="row white-bg logo d-flex justify-content-center">
          <div class="col-sm-1 col-md-12">
              <a href=""> <img id="silver-logo" src="/2023/img/sponsors/shopflix.png"></a>
          </div>
        </div>
       
        <hr class="team-hr">
        <br>
        
        <div class="row white-bg justify-content-center">
          <div class="col">
            <h1 class="gradient-text sponsor-category">Thank you to our Community, Design, &amp; Global Acadamic Partners! </h1>
          </div>
        </div>
        <div class="row white-bg logo d-flex justify-content-center">
          <div class="col-sm-1 col-md-4">
            <a href="https://www.libra.com/en/"><img id="partner-logo" class="libra-logo" src="/2023/img/sponsors/libragroup.png"></a>
          </div>
          <div class="col-sm-1 col-md-4">
            <a href=""><img id="partner-logo" class="scince-logo" src="/2023/img/sponsors/scienceagora.png"></a>
          </div>
          <div class="col-sm-1 col-md-4">
            <a href=""><img id="partner-logo" class="scince-logo" src="/2023/img/sponsors/kathimerini.png"></a>
          </div>
          <div class="col-sm-1 col-md-4 mb-3">
            <a href=""><img id="partner-logo" class="scince-logo" src="/2023/img/sponsors/ogilvy.png"></a>
          </div>
          <div class="col-sm-1 col-md-4">
            <a href=""><img id="partner-logo" class="scince-logo" src="/2023/img/sponsors/eventora.png"></a>
          </div>
          <div class="col-sm-1 col-md-4">
            <a href=""><img id="partner-logo" class="scince-logo" src="/2023/img/sponsors/seeders.png"></a>
          </div>
        </div>
        
        <hr class="team-hr">
      </section>

        <!--WHY ATTEND-->
        <div class="section-div">
            <div></div>
            <!--<img id="element3" src="../img/elements/Asset%202.svg"> 
            <img id="element4" src="../img/elements/Asset%204.svg">-->
        </div>
        <section class="why-attend" id="why-attend-section">
            <div class="row">
                <div class="col index-para">
                    <h1 class="para gradient-text text-center">What's awaiting you at GSW?</h1>
                    <p class="para light-text light-bg-dark-text text-center">Take advantage of the <strong class="light-bg-dark-text">exclusive opportunities</strong> for GSW attendees. <br>The doors are open for you to <strong class="light-bg-dark-text">unleash your inner entrepreneurial potential</strong>!</p>
                    <br>
                    <ul class="white-bullet1">
                        <li class="light-text white-bullet">Transform your ideas into successful <strong style="color: #00c0f2">startups</strong> by gaining valuable <strong>MIT expertise</strong> through workshops</li>
                        <li class="light-text white-bullet">Learn about cutting edge, innovative <strong style="color: #00c0f2">technologies</strong> from <strong>MIT &#38; world experts</strong> through panel discussions</li>
                        <li class="light-text white-bullet">Participate in the <strong style="color: #00c0f2">GSW Competitions</strong> to receive mentorship from renowned entrepreneurs and gain access to exclusive <strong style="color: #00c0f2">VIP networking events</strong> </li>
                        <li class="light-text white-bullet">Display your company in the <strong style="color: #00c0f2">GSW Startup Showcase</strong> featuring protected time with investors</li>
                        <li class="light-text white-bullet">Gain access to top talent and emerging <strong style="color: #00c0f2">tech startups</strong></li>
                        <li class="light-text white-bullet">Learn and understand the <strong style="color: #00c0f2">business landscape</strong> in a global context</li>
                        <li class="light-text white-bullet">Make fruitful connections with <strong style="color: #00c0f2">investors, government officials, corporate representatives,</strong> and more.</li>
                    </ul>
                </div>
            </div>
        </section>
        
   
        
        <?php //include('collaborators.php'); ?>
        
        <!--ACADEMIC PARTNERS-->
        <section class="mt-4">
            <div class="row" style="
            background-image: url(img/banner/banner-03.png);
            background-repeat: no-repeat;
            background-size: cover; height: 344px;
                                 margin-bottom: 10px;
            ">
                <div class="col">
                    <h1 class="section-header competition-text">OUR COLLABORATORS</h1>
                </div>
            </div>
        </section>
  
        <section>
            <div class="row white-bg logo white-bg justify-content-center">
                <div class="col">
                    <h1 class="gradient-text mt-5 text-center">We're proud to collaborate with these organizations!</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-5 col-lg-4" id="collab-logo">
                    <a href="https://entrepreneurship.mit.edu/"><img style="width: 300px; height: 150px;" src="img/collaborators/mtc.png"></a>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4" id="collab-logo">
                   <a href="https://legatum.mit.edu/"><img style="width: 150px; height: 150px;" src="img/collaborators/legatum.png"></a>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4" id="collab-logo">
                    <a href="https://reap.mit.edu/"><img style="width: 250px; height: 200px;" src="img/collaborators/reap.png"></a>
                </div>
            </div>
        </section>

    
    <?php include('footer.php');
    
    
?>
 <script type="text/javascript">
            $(".btn.btn-schedule").on("click", function(e) {
            
                var contentElementId = $(this).data("event-day");
                
                // Hide content from other days
                $(".event-day").addClass("hide");
            
                // Display content from this day
                $("#"+contentElementId).removeClass("hide");
    
                // Mark day as current
                $(".btn.btn-schedule").removeClass("active");
                $(this).addClass("active");
                return false;
            });
        </script>

    
