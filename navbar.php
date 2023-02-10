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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>MIT GSW 2023</title>

        <!--CSS: Adobe Font, Boostrap, style.css-->
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Myriad Pro'>
        <link rel="stylesheet" href="https://use.typekit.net/fww3ner.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel='stylesheet' href='../2023/assets/css/style.css'>
        <link href="https://use.fontawesome.com/0b972b6cf8.css" media="all" rel="stylesheet">
        
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y5RBXMBDQ7"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-Y5RBXMBDQ7');
</script>
        
        <style>@media (min-width: 992px){
.navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
}
}


.copyright {
    margin-top: 0px !important;
}

#footer-hr{
   border-color:#eeeeee3d;    
   width: 64%;
   margin-left: 179px;
}

.schedule_banner{
    background-image: url(img/banner/schedule.png);
}

.register-btn {
    height: 48px; 
    border-radius: 4px;
    font-weight:500;
}

.event_heading{
   padding:0px !important; 
   text-align: left;
}

.event_heading a{
   font-weight: 600;   
}

#workshop_section,#why-attend-section{
    padding: 0px 0px 0px;
}

#workshop_section div {
   padding: 12px 25px 13px 25px;
    
}

#sponsors_section{
   padding: 70px 0px 12px;
}

#sponsors_section div{
   padding: 39px 60px 17px 60px;
}

#registration-section div.white-bg{
    padding: 0px 60px 15px 60px;
}

#footer_section{
   max-height: 419px;
}


.twitter-icon,.facebook-icon,.instagram-icon,.linkedin-icon,.envelope-icon{
    font-size: 2.5rem;
}

.hide{
    display:none;
}

#Day1{
  text-align: left;    
}

.active:after {
    content: unset;
}
 @media only screen and (max-width: 600px) {
        div#navbarSupportedContent {
            background: #000;
            padding: 20px;
            z-index: 2;
        }
}

</style>
    </head>


    <body>
        <!--<nav class="navbar navbar-expand-lg navbar-fixed-top">-->
        <!--    <div class="container-fluid">-->
        <!--        <div class="navbar-header">-->
        <!--            <a class="navbar-brand" href="/2023/index.php"><img id="logo-left" src="img/GSW_logo_black.png"></a>-->
        <!--        </div>-->
        <!--        <ul class="nav navbar-nav mr-auto pt-1">-->
        <!--            <li class="active"><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a></li>-->
        <!--            <li class=""><a class="nav-link"  style="background-color: #7d4270; color: white; border-radius: 3.5px;" href="https://www.eventora.gr/mit-gsw/">Register Now</a></li>-->
        <!--            <li class=""><a class="nav-link" href="/2023/schedule.php">Agenda</a></li>-->
        <!--            <li class=""><a class="nav-link" href="/2023/speakers.php">Speakers</a></li>-->
        <!--            <li class="dropdown">-->
        <!--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Startup Competitions</a>-->
        <!--                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
        <!--                    <a class="nav-link dropdown-item" href="/2023/startup-pitch.php">Startup Pitch</a>-->
        <!--                </div>-->
        <!--            </li> -->
        <!--            <li class="dropdown">-->
        <!--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
        <!--                    About Us-->
        <!--                </a>-->
        <!--                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
        <!--                    <a class="nav-link dropdown-item" href="/2023/team.php">Our Team</a>-->
        <!--                    <div class="dropdown-divider"></div>-->
        <!--                    <a class="nav-link dropdown-item" href="/2023/sponsors.php">Sponsors</a>-->
        <!--                </div>-->
        <!--            </li> -->
        <!--        </ul>-->
        <!--        <ul class="nav navbar-nav navbar-right">-->
        <!--            <li><a href="https://web.mit.edu/"><img id="logo-right" src="img/mit.png"></a></li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</nav> -->
        <nav class="navbar navbar-expand-lg navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/2023/index.php"><img id="logo-left" src="img/GSW_logo_white.png"></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav mr-auto">
                    <li class="active"><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
                    <li class=""><a class="nav-link" target="_blank"  style="background-color: #7d4270; color: white; border-radius: 3.5px;" href="https://www.eventora.gr/mit-gsw/">Tickets</a></li>
                    <li class=""><a class="nav-link disabled" href="/2023/schedule.php">Agenda</a></li>
                    <li class=""><a class="nav-link" href="/2023/speakers.php">Speakers</a></li>
                    <li class=""><a class="nav-link " href="/2023/competitions.php">Competitions</a></li>
                    <!--<li class="dropdown">-->
                    <!--    <a class="nav-link dropdown-toggle" href="/2023/competitions.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Competitions</a>-->
                    <!--    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
                    <!--        <a class="nav-link dropdown-item" href="/2023/competitions.php">Startup Pitch</a>-->
                    <!--    </div>-->
                    <!--</li> -->
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About Us
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="nav-link dropdown-item" href="/2023/team.php">Our Team</a>
                            <div class="dropdown-divider"></div>
                            <a class="nav-link dropdown-item" href="/2023/sponsors.php">Sponsors</a>
                        </div>
                    </li> 
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://web.mit.edu/" target="_blank"><img id="logo-right" src="img/mit.png"></a></li>
                </ul>
                    </div>
            </div>
        </nav> 

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
        <!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
        <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
<!--    </body>  -->
<!--</html>-->
