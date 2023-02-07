<?php
  include('navbar.php');
  include('header.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>MIT GSW 2023</title>

        <!--CSS: Adobe Font, Boostrap, style.css-->
        <link rel="stylesheet" href="https://use.typekit.net/fww3ner.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel='stylesheet' href='../2023/assets/css/style.css'>
    </head>
    <style>
    .pt-1 {
    padding-top: 1.25rem!important;
}
        .sponsor-hr{
            border-top: 1px solid#dd4f33 !important;
            margin: 0 auto;
            width:30%;
           
        }
        .team-hr{
            border-bottom: 2px solid rgba(100, 121, 162,0.3);
            border-top: unset;
            padding-bottom: 5px;
            color: #0e1e58;
            width: 60%;
            margin: 0 auto;
            margin-top: -40px;
        }
        .libra-logo, .scince-logo{
            margin-top: 30px !important;
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
        }
    </style>
    <body>
        <!--SPONSORS-->
        <div class="section-div">
            <img class="banner" src="/2023/img/banner/sponsors.png"> 
        </div>
        <section>
            <div class="row white-bg">
                <div class="col" >
                    <h1 class="gradient-text" class="banner-margin">Thank you to our Sponsors and Partners! </h1>
                </div>
                
            </div>
            <hr class="team-hr">
            <div class="row white-bg logo d-flex justify-content-center">
                <div class="col-sm-1 col-md-4 white-bg">
                    <a href=""> <img id="sponsor-logo" src="/2023/img/sponsors/capitalpartner-diamond.png"></a>
                </div>
                <div class="col-sm-1 col-md-4">
                    <a href="https://www.libra.com/en/"><img id="sponsor-logo" class="libra-logo" src="/2023/img/sponsors/libragroup.png"></a>
                </div>
                <div class="col-sm-1 col-md-4">
                    <a href=""><img id="sponsor-logo" class="scince-logo" src="/2023/img/sponsors/scienceagora.png"></a>
                </div>
            </div>
            <hr class="sponsor-hr">
            <div class="row white-bg logo d-flex justify-content-center">
                <div class="col-sm-1 col-md-4 banner-margin">
                    <a href=""> <img id="sponsor-logo" src="/2023/img/sponsors/shopflix.png"></a>
                </div>
            </div>
            <hr class="sponsor-hr">           
          
        </section>
    </body>
</html>
<?php include('footer.php');
?>
