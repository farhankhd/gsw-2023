<?php
// Increase this version every time you change the style.css file
// See more in https://css-tricks.com/strategies-for-cache-busting-css/#article-header-id-1
$cssVersion = "1.1.5";
?>
<!--include CSS Style Sheet-->
<?php echo "<link rel='stylesheet' type='text/css' href='assets/css/style.css' />";?>
<!--include a javascript file-->
<?php echo "<script type='text/javascript' src='assets/js/scripts.js'></script>";?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?= $pageTitle ?></title>
        <meta name="description" content="<?= $metaDescription ?>">
        <meta name="keywords" content="MIT Global Startup Workshop, MIT GSW, MIT, Athens, Greece, Entrepreneurship, Mentorship, Workshops, Innovation, Technology,innovation-driven entrepreneurship,<?= $specificKeywords?>">
        <link rel="shortcut icon" href="favicon.ico"/>
        <link rel="canonical" href="http://gsw.mit.edu/2023/">
        <meta property="og:site_name" content="MIT Global Startup Workshop">
        <meta property="og:title" content="Home">
        <meta property="og:url" content="http://gsw.mit.edu/2023/">
        <meta itemprop="name" content="Home">
        <meta itemprop="url" content="http://gsw.mit.edu/2023/">
        <link rel="image_src" href="../img/GSW_logo_white.png">
        <meta itemprop="image" content="../img/GSW_logo_white.png">
        <meta name="twitter:title" content="Home">
        <meta name="twitter:image" content="../img/GSW_logo_white.png">
        <meta name="twitter:url" content="http://gsw.mit.edu/2023/">
        <meta name="twitter:card" content="summary">
        <meta name="description" content="MIT Global Startup Workshop is coming to Greece this year. Grab tickets now and come have an entrepreneurial experience you will never forget!">
        <meta property="og:type" content="website">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        
        <!--CSS: Adobe Font, Boostrap, style.css-->
        <link rel="stylesheet" href="https://use.typekit.net/fww3ner.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/style.css?v=<?= $cssVersion ?>">
        <!--<link href="https://use.fontawesome.com/0b972b6cf8.css" media="all" rel="stylesheet">-->
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109416268-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-109416268-1');
        </script>
        <!-- End global site tag (gtag.js) - Google Analytics -->

        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
             if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
             n.queue=[];t=b.createElement(e);t.async=!0;
             t.src=v;s=b.getElementsByTagName(e)[0];
             s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '334959103628229'); 
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" src="https://www.facebook.com/tr?id=334959103628229&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" id="nav">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo-left" href="index.php"><img src="img/GSW_logo_white.png" id="navbar-logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-mobile" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
                        <li><a href="registration.php" onClick="fbq('trackCustom', 'Top_Menu_Registration_GSW');">Register now</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Agenda <span class="caret"></span>
                            </a>
                            <div id="agendaMenu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="schedule.php">Schedule</a>
                                <!--
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="panels_workshops.php">Content Overview</a>
-->
                            </div>
                        </li>
                        <li><a href="speakers.php">Speakers</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Competitions <span class="caret"></span>
                            </a>
                            <div id="competitionMenu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="startup-pitch.php">Startup <br />Pitch</a>
                                <!--
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="bpc.php">Business Plan <br />Competition</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="epc.php">Elevator Pitch <br /> Competition</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="mentors.php">Mentors</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="judges.php">Judges</a>
                                -->
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" id="navbarDropdown" >
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About <span class="caret"></span>
                            </a>
                            <div id="aboutMenu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <!--
                                <a class="dropdown-item" href="history.php">History</a>
                                <div class="dropdown-divider"></div>
                                -->
                                <a class="dropdown-item" href="team.php">Who we are</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="sponsors.php">Sponsors</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="collaborators.php">Collaborators</a>
                            </div>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                <!--Right most MIT logo-->
                <a class="navbar-brand" href="index.html">
                    <img id="logo-right" src="img/mit.png">
                </a>
            </div><!-- /.container-fluid -->
        </nav>
    </body>
<?php
    $scripts = "
    <script>
        $(document).scroll(function () {
            var scrollPos = $(document).scrollTop();
            if (scrollPos > 250) {
                $('#navbar-logo').addClass('navbar-logo-small');
                $('.navbar').addClass('navbar-condensed');
            } else {
                $('#navbar-logo').removeClass('navbar-logo-small');
                $('.navbar').removeClass('navbar-condensed');
            }
        });

        (function() {
            var nav = document.getElementById('nav'),
            anchor = nav.getElementsByTagName('a'),
            current = window.location.href.split('/')[window.location.href.split('/').length-1];

            for (var i = 0; i < anchor.length; i++) {
                var url = anchor[i].href.split('/')[anchor[i].href.split('/').length-1];

                if(url == current) {

                        anchor[i].className = \"active\";
                }
            }
        })();
    </script>";
?>
