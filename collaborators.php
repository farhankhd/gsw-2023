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
    
    <style>
        #collab-logo {
            display: block;
            width: 50%;
            position: relative;
            margin: auto;
        }
    </style>


  
    <body>
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
            <div class="row logo d-flex justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-4" >
                    <a href="https://entrepreneurship.mit.edu/"><img id="collab-logo" style="width: 350px; text-align: center" src="img/collaborators/mtc.png"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                   <a href="https://legatum.mit.edu/"><img id="collab-logo" style="width: 150px" src="img/collaborators/legatum.png"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <a href="https://reap.mit.edu/"><img id="collab-logo" style="width: 350px" src="img/collaborators/reap.png"></a>
                </div>
            </div>
        </section>
    </body>
<?php include_once 'footer.php'; ?>


