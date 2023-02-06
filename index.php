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


    include('templates/navbar.php');
    include('templates/header.php'); ?>
        <div class="section-div">
        <div class="row text-center">
            <div class="col-md-offset-2 col-md-8">
                <div class="row">
                <div class="col-xs-4 col-md-offset-1 col-md-2">
                    <a href="https://twitter.com/MITGSW"><span class="fa fa-twitter-square sm-icon"></span></a>
                </div>
                <div class="col-xs-4 col-md-2">
                    <a href="https://www.facebook.com/MITGSW/"><span class="fa fa-facebook-square sm-icon"></span></a>
                </div>
                <div class="col-xs-4 col-md-2">
                    <a href="https://www.instagram.com/MITGSW/"><span class="fa fa-instagram sm-icon"></span></a>
                </div>
                <div class="col-xs-4 col-xs-offset-2 col-md-offset-0 col-md-2">
                    <a href="https://www.linkedin.com/company/mit-global-startup-workshop/"><span class="fa fa-linkedin-square sm-icon"></span></a>
                </div>
                <div class="col-xs-4 col-md-2">
                    <a href="mailto:gsw-tech@mit.edu"><span class="fa fa-envelope-square sm-icon"></span></a>
                </div></div>
            </div>
        </div>
        
        <br />

        <hr id="footer-hr">

        <div class="row text-center">
            <div class="col-md-offset-2 col-md-4">
                <p class="footer-title">The Conference</p>
                <a href="index.php">Home</a><br>
                <a href="registration.php" onClick="fbq('trackCustom', 'Bottom_Register_to_attend_GSW');">Registration</a><br>
                <a href="schedule.php">Schedule</a><br>
                <!--<a href="content_overview.php">Content Overview</a><br>-->
                <a href="startup-pitch.php">Competitions</a><br>
                <a href="speakers.php">Speakers</a><br>
            </div>
            <div class="col-md-4">
                <p class="footer-title">Organization</p>
                <!--<a href="get_involved.php">Get involved with MIT</a><br>-->
                <!--<a href="history.php">History</a><br>-->
                <a href="team.php">Who we are</a><br>
                <a href="sponsors.php">Sponsors</a><br>
                <a href="collaborators.php">Collaborators</a><br>
                <!--<a href="index.php#location">Venue</a><br>-->
            </div>
        </div>
    
        <div class="row">
            <div class="copyright col-md-12">
                Copyright ©2011–2023 Massachusetts Institute of Technology. All rights reserved.<br>
                For more information please contact <a href="mailto:gsw-tech@mit.edu">gsw-tech@mit.edu</a>
            </div>
        </div>
    </div>
    <?php //include('templates/footer.php');
?>
