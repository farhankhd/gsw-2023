<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>MIT GSW 2023</title>

        <!--CSS: Google Font, Boostrap, style.css-->
        <!--
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Myriad Pro'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel='stylesheet' href='../assets/css/style.css'>
        -->
        
        <!--include CSS Style Sheet-->
        <?php echo "<link rel='stylesheet' type='text/css' href='assets/css/style.css' />";?>

        <!--include a javascript file-->
        <?php echo "<script type='text/javascript' src='assets/js/scripts.js'></script>";?>
    </head>

    <body>
        <?php   
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Hello, fellow innovator! Our website is under rennovation. Please come back tommorow for updated information on GSW 2023!")';  
            echo '</script>';  
        ?>  

        <!--LANDING OWL VISUAL + COUNTDOWN-->
        <div class='main'>
            <div class="row">
                <div class="col">
                    <img class="main-visual" src="img/main-logo.png" alt="logo" width="480" height="670">
                </div>
                <div class="col" style="text-align: center;  padding: 100px 0px 100px 0px;">
                    <h6 style="padding-top:20px">MIT GLOBAL STARTUP WORKSHOP</h6>
                    <input type="image" src="img/GSW_logo_white.png" alt="logo" width="250" height="75">
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
        <?php include("registration.php"); ?>

        <!--BACKGROUND-->
        <div class="section-div">
            <div></div>
            <!--<img id="element1" src="img/elements/Asset%201.svg"> 
            <img id="element2" src="img/elements/Asset%202.svg">-->
        </div>
        <section>
            <div class="row white-bg">
                <div class="col white-bg">
                    <h1 class="gradient-text">25 Years Strong</h1>
                    <br><br>
                    <p class=" light-text light-bg-dark-text"> MIT Global Startup Workshop (MIT GSW) is an annual multi-day conference that brings together entrepreneurs, students, investors, and key stakeholders from across the world to accelerate the entrepreneurial ecosystem of a host region. Through a series of tailored workshops, panels and keynote speakers, MIT GSW aims to share the entrepreneurial practices that have empowered thousands of companies to launch from MIT. MIT GSW is organized by a diverse group of graduate students and is strongly supported by the MIT entrepreneurial ecosystem including the MIT Legatum Center for Development &#38; Entrepreneurship, the Martin Trust Center for MIT Entrepreneurship, and the MIT Regional Entrepreneurship Accelerator Program (MIT REAP). Since 1998, our non-profit, student-run organization has held 22 international workshops across 6 continents, and has attracted participants from over 70 nations. </p>
                </div>
            </div>
        </section>

        <?php include("sponsors.php"); ?>

        <!--WHY ATTEND-->
        <div class="section-div">
            <div></div>
            <!--<img id="element3" src="img/elements/Asset%202.svg"> 
            <img id="element4" src="img/elements/Asset%204.svg">-->
        </div>
        <section class="why-attend">
            <div class="row">
                <div class="col">
                    <h1 class="gradient-text">What's awaiting you at GSW?</h1>
                    <p class="light-text light-bg-dark-text">Take advantage of the <strong class="light-bg-dark-text">exclusive opportunities</strong> for GSW attendees. The doors are open for you to <strong class="light-bg-dark-text">unleash your inner entrepreneurial potential</strong>!</p>
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
    
        <?php include("templates/schedule.php"); ?>
        <?php include('templates/collaborators.php'); ?>
        <?php include('templates/footer.php'); ?>
  

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--External JS-->
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
<?php
    include("footer.php");
?>
