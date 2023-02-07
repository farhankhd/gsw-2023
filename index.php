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
                <div class="col-xs-12">
                    <br />
                    <div class="white-bg text-center">
                        <h1 class="gradient-text">Are you ready for MIT Global Startup Workshop 2023?</h1>
                    <p class="light-text light-bg-dark-text">Don't wait! <strong class="light-bg-dark-text">Buy your tickets</strong> now for a lifelong innovative experience</p>
                    </div>
                    <a class="btn btn-default register-btn"onClick="fbq('trackCustom', 'Home_Register Now_GSW’);" href="http://eventora.gr/mit-gsw" role="button">REGISTER TO ATTEND</a>
                    <br />
                </div>
               
            </div>
        </div>
        
        
        <!--BACKGROUND-->
        <div class="section-div">
            <div></div>
            <!--<img id="element1" src="../img/elements/Asset%201.svg"> 
            <img id="element2" src="../img/elements/Asset%202.svg">-->
        </div>
        <section id="workshop_section">
            <div class="row white-bg">
                <div class="col white-bg">
                    <h1 class="gradient-text">25 Years Strong</h1>
                    <br><br>
                    <p class=" light-text light-bg-dark-text"> MIT Global Startup Workshop (MIT GSW) is an annual multi-day conference that brings together entrepreneurs, students, investors, and key stakeholders from across the world to accelerate the entrepreneurial ecosystem of a host region. Through a series of tailored workshops, panels and keynote speakers, MIT GSW aims to share the entrepreneurial practices that have empowered thousands of companies to launch from MIT. MIT GSW is organized by a diverse group of graduate students and is strongly supported by the MIT entrepreneurial ecosystem including the MIT Legatum Center for Development &#38; Entrepreneurship, the Martin Trust Center for MIT Entrepreneurship, and the MIT Regional Entrepreneurship Accelerator Program (MIT REAP). Since 1998, our non-profit, student-run organization has held 22 international workshops across 6 continents, and has attracted participants from over 70 nations. </p>
                </div>
            </div>
        </section>

        <?php //include("sponsors.php"); ?>

        <div class="section-div">
            <img class="banner" src="/2023/img/banner/sponsors.png"> 
        </div>
        <section id="sponsors_section">
            <div class="row white-bg">
                <div class="col white-bg">
                    <h1 class="gradient-text">Thank you to our Sponsors and Partners! </h1>
                </div>
            </div>
            <!--</div>-->
            <div class="row white-bg logo d-flex justify-content-center">
                <div class="col-sm-6 col-md-3 col-lg-3 white-bg">
                    <a href=""> <img id="sponsor-logo" src="/2023/img/sponsors/capitalpartner-diamond.png"></a>
                </div>
            <!--</div>-->
            <!--<div class="row white-bg logo d-flex justify-content-center">-->
                <div class="col-sm-6 col-md-3 col-lg-3 white-bg">
                    <a href="https://shopflix.gr/"><img id="sponsor-logo" src="/2023/img/sponsors/shopflix.png"></a>
                </div>
            <!--</div>-->
            <!--<div class="row white-bg logo d-flex justify-content-center">-->
                <div class="col-sm-6 col-md-3 col-lg-3 white-bg">
                    <a href="https://www.libra.com/en/"><img id="sponsor-logo" src="/2023/img/sponsors/libragroup.png"></a>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 white-bg">
                    <a href=""><img id="sponsor-logo" src="/2023/img/sponsors/scienceagora.png"></a>
                  
                </div>
            </div>
        </section>


        <!--WHY ATTEND-->
        <div class="section-div">
            <div></div>
            <!--<img id="element3" src="../img/elements/Asset%202.svg"> 
            <img id="element4" src="../img/elements/Asset%204.svg">-->
        </div>
        <section class="why-attend" id="why-attend-section">
            <div class="row">
                <div class="col">
                    <h1 class="gradient-text">What's awaiting you at GSW?</h1>
                    <p class="light-text light-bg-dark-text">Take advantage of the <strong class="light-bg-dark-text">exclusive opportunities</strong> for GSW attendees. <br>The doors are open for you to <strong class="light-bg-dark-text">unleash your inner entrepreneurial potential</strong>!</p>
                    <br>
                    <ul class="white-bullet">
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
        
        
    
        <?php //include("schedule.php"); ?>
        <div class="banner schedule_banner" data-parallax="scroll" data-image-src="img/banner/schedule.png">
    <a name="schedule"></a>
    <!--
<h1 class="banner-text">
Schedule
</h1>
-->
</div>

<section class="content-schedule container">
    <article class="content ">
        <div class="col-xs-12 col-md-12">
            <span class="anchor" id="schedule-navigation"></span>
            <p class="text-center">
                Use the buttons below to view the conference schedule day by day.
                <br />Schedule subject to change.</p>
        </div>

        <div class="col-xs-12 col-md-12 schedule-wrapper">
            <div class="row toggle-group" id="toggle-group">
                <div class="col-xs-12 col-sm-4 sqs-block button-block sqs-block-button">
                    <a href="/#" data-event-day="Day1" class="btn btn-schedule active">THURSDAY (March 30)</a>
                </div>
                <div class="col-xs-12 col-sm-4 sqs-block button-block sqs-block-button">
                    <a href="/#" data-event-day="Day2" class="btn btn-schedule">FRIDAY (March 31)</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 event-wrapper">
        </div>
        <div class="col-xs-12 event-tags">
            <div class="event-tag event-type-general">General</div>
            <div class="event-tag event-type-keynote">Keynote</div>
            <div class="event-tag event-type-panel">Panel</div>
            <div class="event-tag event-type-workshop">Workshop</div>
            <div class="event-tag event-type-competition">Competition</div>
        </div>

        <br />

        <div class="col-xs-12 speaker-expanded-bio">
            <div class="row">
                <?php
                // PARSE CSV CONTENT
                $fileHandle = fopen("data/schedule.csv", "r");
                
                if ($fileHandle !== FALSE) {
                    fgetcsv($fileHandle, 1000, ","); // Skip first line (headers)

                    $eventId = 0;

                    // Keep event time between rows for comparison
                    $eventDay = "";
                    $eventTime = "";
                    $lastEventDay = "";
                    $lastEventTime = "";

                     while (($data = fgetcsv($fileHandle, 1000, ",")) !== FALSE) {
                       
                         $data = array_map("utf8_encode", $data);
                    
                        $lastEventDay = $eventDay;  

                        $lastEventTime = "";

                        while (($data = fgetcsv($fileHandle, 1000, ",")) !== FALSE) {
                             $data = array_map("utf8_encode", $data);
    
                            $lastEventDay = $eventDay;
                            $lastEventTime = $eventTime;
                            $eventDay = $data[0];
                            $eventTime = $data[1];
                            $eventTitle = $data[2];
                            $eventType = $data[4];

                            // // there is another event at the same time
                            $isParallel = $lastEventTime == $eventTime;
                               
                            // speaker is a keynote
                            $isKeynote = $eventType == "keynote";
                            $keynoteSpeakerTag = $data[7];

                            // // event ID also used in the panels_workshops page
                            $isPanelOrWorkshop = ($eventType == "workshop") || ($eventType == "panel");
                            if ($isPanelOrWorkshop) {
                                $eventId++;
                            }

                            if ($lastEventDay != $eventDay) {
                                if ($lastEventDay != "") {
                                    echo "</div> <!-- end of #Day$lastEventDay -->";
                                }
                ?><div id="Day<?= $eventDay ?>" class="event-day col-xs-12 <?= ($lastEventDay != "") ? "hide" : "" ?>">
                <div>
                    <?php if ($eventDay == 1){echo "<p class='locationSchedule' style='text-align: left;'>Location: TBD</p>";}
                                else if ($eventDay == 2){echo "<p class='locationSchedule' style='text-align: left;'>Location: TBD</p>";}
                    ?>
                </div>
                <?php
                            }
                ?>
                <div class="event-category">
                    <div class="event-group <?= ($isParallel ? "event-parallel" : "") ?>">
                        <div class="event-list">
                            <div class="event-detail">
                                <div class="event-left">
                                    <div class="event-time">

                                        <?= $eventTime ?>
                                    </div>
                                </div>
                                <div class="event-right event-type-<?= $eventType ?>">
                                    <h3 class="event_heading" style="color: #000;">
                                        <?php
                    if ($isKeynote) {
                        echo "<a href='speakers.php#$keynoteSpeakerTag' style='color: #000;'>$eventTitle</a>";
                    }
                            else if ($isPanelOrWorkshop) {
                                echo "<a href='panels_workshops.php#$eventId' style='color: #000;'>$eventTitle</a>";
                            }
                            else {
                                echo $eventTitle;
                            }
                                        ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                         }
                       // fclose($fileHandle);
                    }
                    
                    
                }
                ?>
                </div> <!-- end of #Day2 -->

                <div class="col-xs-12 visible-xs-block">
                    <br /><br />
                    <!--<p class="text-center"><a href="#schedule-navigation" style='color: #000;'>See schedule for another day</a></p>-->
                </div>
            </div> <!-- end of .row -->
        </div> <!-- end of .speaker-expanded-bio -->
    </article>
</section>

    <?php
                        // DAY BUTTON CLICK
                        $scripts .= '
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
        </script>';
        
                    
    ?>
        
       
        
        
        <?php //include('collaborators.php'); ?>
        
        <!--ACADEMIC PARTNERS-->
          
        <div class="section-div mt-4">
            <img class="banner" src="img/banner/collaborators.png"> 
        </div>
        <section>
            <div class="row white-bg">
                <div class="col white-bg">
                    <h1 class="gradient-text">We're proud to collaborate with these organizations!</h1>
                </div>
            </div>
            <div class="row white-bg logo">
                <div class="col-sm-6 col-md-3 col-lg white-bg">
                    <a href="https://entrepreneurship.mit.edu/"><img id="collab-logo" src="img/collaborators/mtc.png"></a>
                </div>
                <div class="col-sm-6 col-md-3 col-lg white-bg">
                   <a href="https://legatum.mit.edu/"><img id="collab-logo" src="img/collaborators/legatum.png"></a>
                </div>
                <div class="col-sm-6 col-md-3 col-lg white-bg">
                    <a href="https://reap.mit.edu/"><img id="collab-logo" src="img/collaborators/reap.png"></a>
                </div>
            </div>
        </section>

        
    
    <!--    <div class="section-div">-->
    <!--    <div class="row text-center">-->
    <!--        <div class="col-md-offset-2 col-md-8">-->
    <!--            <div class="row">-->
    <!--            <div class="col-xs-4 col-md-offset-1 col-md-2">-->
    <!--                <a href="https://twitter.com/MITGSW"><span class="fa fa-twitter-square sm-icon"></span></a>-->
    <!--            </div>-->
    <!--            <div class="col-xs-4 col-md-2">-->
    <!--                <a href="https://www.facebook.com/MITGSW/"><span class="fa fa-facebook-square sm-icon"></span></a>-->
    <!--            </div>-->
    <!--            <div class="col-xs-4 col-md-2">-->
    <!--                <a href="https://www.instagram.com/MITGSW/"><span class="fa fa-instagram sm-icon"></span></a>-->
    <!--            </div>-->
    <!--            <div class="col-xs-4 col-xs-offset-2 col-md-offset-0 col-md-2">-->
    <!--                <a href="https://www.linkedin.com/company/mit-global-startup-workshop/"><span class="fa fa-linkedin-square sm-icon"></span></a>-->
    <!--            </div>-->
    <!--            <div class="col-xs-4 col-md-2">-->
    <!--                <a href="mailto:gsw-tech@mit.edu"><span class="fa fa-envelope-square sm-icon"></span></a>-->
    <!--            </div></div>-->
    <!--        </div>-->
    <!--    </div>-->
        
    <!--    <br />-->

    <!--    <hr id="footer-hr">-->

    <!--    <div class="row text-center">-->
    <!--        <div class="col-md-offset-2 col-md-4">-->
    <!--            <p class="footer-title">The Conference</p>-->
    <!--            <a href="index.php">Home</a><br>-->
    <!--            <a href="registration.php" onClick="fbq('trackCustom', 'Bottom_Register_to_attend_GSW');">Registration</a><br>-->
    <!--            <a href="schedule.php">Schedule</a><br>-->
                <!--<a href="content_overview.php">Content Overview</a><br>-->
    <!--            <a href="startup-pitch.php">Competitions</a><br>-->
    <!--            <a href="speakers.php">Speakers</a><br>-->
    <!--        </div>-->
    <!--        <div class="col-md-4">-->
    <!--            <p class="footer-title">Organization</p>-->
                <!--<a href="get_involved.php">Get involved with MIT</a><br>-->
                <!--<a href="history.php">History</a><br>-->
    <!--            <a href="team.php">Who we are</a><br>-->
    <!--            <a href="sponsors.php">Sponsors</a><br>-->
    <!--            <a href="collaborators.php">Collaborators</a><br>-->
                <!--<a href="index.php#location">Venue</a><br>-->
    <!--        </div>-->
    <!--    </div>-->
    
    <!--    <div class="row">-->
    <!--        <div class="copyright col-md-12">-->
    <!--            Copyright ©2011–2023 Massachusetts Institute of Technology. All rights reserved.<br>-->
    <!--            For more information please contact <a href="mailto:gsw-tech@mit.edu">gsw-tech@mit.edu</a>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
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

    
