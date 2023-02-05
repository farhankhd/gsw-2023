

<?php
    // Increase this version every time you change the style.css file
    // See more in https://css-tricks.com/strategies-for-cache-busting-css/#article-header-id-1
    $cssVersion = "2.0.0";

    //set headers to NOT cache a page
    header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
    header("Pragma: no-cache"); //HTTP 1.0
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

    // Require https

    if( !($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') ){
        if ($_SERVER['HTTPS'] != "on") {
            $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            header("Location: $url");
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Cache-control" content="public">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <title><?= $pageTitle ?></title>
    <link rel="shortcut icon" href="favicon.ico"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://use.fontawesome.com/0b972b6cf8.css" media="all" rel="stylesheet">
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
            <a class="navbar-brand" href="index.php"><img src="img/GSW_logo_white.png" id="navbar-logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-mobile" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="templates/registration.php">Registration</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Competitions <span class="caret"></span>
                    </a>
                    <div id="competitionMenu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                  
                        <a class="dropdown-item" href="templates/startup-pitch.php">Startup <br /> Pitch</a>
                    </div>
                </li> 
                <!-- <li><a href="agenda.php">Agenda</a></li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Agenda <span class="caret"></span>
                    </a>
                    <div id="competitionMenu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="assets/booklet2.pdf">Agenda with Locations</a>
                        <a class="dropdown-item" href="assets/booklet.pdf">Conference Program (Download)</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="templates/schedule.php">Schedule</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="panels.php">Content</a>
                    </div>
                </li> 
                <li><a href="sponsors.php">Sponsors</a></li>
                <li><a href="speakers.php">Speakers</a></li>
                <!-- <li><a href="team.php">About Us</a></li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About Us <span class="caret"></span>
                    </a>
                    <div id="competitionMenu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="templates/team.php">Who We <br />Are</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="templates/collaborators.php">Collaborators</a>
                    </div>
                </li> 
                
            </ul>
            <ul class="nav navbar-nav navbar-right" id="navbarDropdown" >
            <a href="https://www.mit.edu"> 
                <img src="img/mit.png" id="navbar-logo-right">
            </a>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

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
