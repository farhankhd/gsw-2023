<?php
    $pageTitle = 'Judges | MIT Global Startup Workshop 2023';
    include('templates/nav-bar.php');
?>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130174054-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-130174054-2');
    gtag('send', 'pageview');
    </script>
    
    <style>

    .overlay {
  	position: absolute;
  	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	height: 100%;
	width: 100%;
	opacity: 0;
	transition: .5s ease;
	background-color: #008CBA;
	}
	.container:hover .overlay {
	  opacity: 1;
	}
    .text {
    	color: white;
	font-size: 12px;
	position: relative;
	top: 50%;
	left: 50%;
	width: 90%;
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	text-align: center;
     }
    </style>

</head>

<div class="parallax-window header" data-parallax="scroll" style="background-image: url('images/dome.jpg');">
    <div class="header-overlay">
    <h1 class="parallax-text">
        Our Judges
    </h1>
    </div>
</div>
<div class="section">
	<div style="color:white;">
        	Our team consists of individuals across all parts of the MIT campus, and is supported by an accomplished advisory board.
    	</div>
	
	<br>
	
	<div class="section-header section-header-page" style="color: white">Introducing Our 2023 Judges</div>
	<div class="row team-row text-center">
		<div class="team container col-md-4">
			<a href="">
			<img class="team-picture" src="images/team/Farhan.jpg"></a>
			<div class="overlay">
				<div class="text">
					Judge 1 Bio Coming Soon
				</div>
			</div>
			<div class="team-name">Judge 1</div>
			<div class="team-role">N/A</div>
			<div class="team-area">N/A</div>
		</div>
		<div class="team container col-md-4">
			<a href="">
			<img class="team-picture" src="images/team/Farhan.jpg"></a>
			<div class="overlay">
				<div class="text">
					Judge 2 Bio Coming Soon
				</div>
			</div>
			<div class="team-name">Judge 2</div>
			<div class="team-role">N/A</div>
			<div class="team-area">N/A</div>
		</div>
		<div class="team container col-md-4">
			<a href="">
			<img class="team-picture" src="images/team/Farhan.jpg"></a>
			<div class="overlay">
				<div class="text">
					Judge 3 Bio Coming Soon
				</div>
			</div>
			<div class="team-name">Judge 3</div>
			<div class="team-role">N/A</div>
			<div class="team-area">N/A</div>
		</div>
	</div>
		
<div class="section">
    <hr />
</div>


<?php
    include('templates/footer.php');
?>
