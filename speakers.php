<?php
    $pageTitle = 'Speakers | MIT Global Startup Workshop 2023';
    include('templates/nav-bar.php');
?>
<head>
	<style>
		.team-speaker {
        		min-height: 350px;
    		}

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
		.team-bio {
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
		#idLinkedInIcon{background-color:rgb(0, 102, 170);border-radius:6px;color:white;cursor:pointer;display:inline-block;font:bold 35px Arial, Helvetica, sans-serif;height:40px;margin-top:1px;text-align:center;width:40px;}
		#idLinkedInIcon:hover{background-color:#06d;}
    </style>
</head>

<div class="parallax-window header" data-parallax="scroll" style="background-image: url('images/speaker/parallax2.jpg');">
    <div class="header-overlay">
    <h1 class="parallax-text">
        Our Speakers
    </h1>
    </div>
</div>

<body style="background-image: url('images/speaker/speaker-background.jpg');">
	<div class="section">
		<div style="color:white;">
		    MIT GSW is proud to host a diverse range of speakers from Cambridge and around the world. 
		    We're excited to have these world class individuals share their experiences with us!
		    <!-- <h4 style="text-align: left;"> Click on each speaker to learn more about their background and accomplishments</h4>-->
	    	</div>
		<br>
		
		<div class="section-header section-header-page" style="color: white">Keynotes</div>
		<div class="row team-row text-center">
		    <div class="team container col-md-6">
				    <a href="https://www.linkedin.com/in/miles-barr-10401765/">
				    <img class="team-picture" src="images/speaker/miles-barr.jpg"></a>
			<div class="overlay">
			    <div class="team-bio">
				Founded Ubiquitous Energy, the world leader in transparent photovoltaics. Our award-winning technology is the world's only truly transparent solar product. 
				<br>
				<br>
				<div id="idLinkedInIcon" onclick="https://www.linkedin.com/in/miles-barr-10401765"</div>
			    </div>

			</div>
			<div class="team-name">Miles Barr</div>
			<div class="team-role">Sustainability</div>
			<!--<div class="team-area">MIT School of Engineering</div>-->
		    </div>

		    <div class="team container col-md-6">
			    <a href="">
			    <img class="team-picture" src="images/speaker/andrey-zarur.jpg"></a>
			<div class="overlay">
			    <div class="team-bio">
				Andrey Zarur's bio coming soon!
				<br>
				<br>
				<!--
				<div id="idLinkedInIcon" onclick="https://www.linkedin.com/in/farhan-khodaee-62212242/');" title="Team | MIT Global Startup Workshop 2023">in</div>
				-->
			    </div>
			</div>
			<div class="team-name">Andrey Zarur</div>
			<!--
			<div class="team-role"></div>
			<div class="team-area"></div>
			-->
		    </div>
		</div>
	    </div>
	   
	    <div class="section-header section-header-page" style="color: white">Panelists</div>
		    <div class="row team-row text-center">
		    <div class="team container col-md-4">
				    <a href="https://www.linkedin.com/in/ligris/">
				    <img class="team-picture" src="images/speaker/kosta-ligris.jpg"></a>
			<div class="overlay">
			    <div class="team-bio">
				Founder of Ligris, Stavvy
				<br>
				<br>
				<div id="idLinkedInIcon" onclick="https://www.linkedin.com/in/ligris/"</div>
			    </div>

			</div>
			<div class="team-name">Kosta Ligris</div>
			<div class="team-role"></div>
			<!--<div class="team-area">MIT School of Engineering</div>-->
		    </div>

		    <div class="team container col-md-4">
				    <a href="https://www.linkedin.com/in/marinahatsopoulos/">
				    <img class="team-picture" src="images/speaker/marina-hatsopoulos.jpg"></a>
			<div class="overlay">
			    <div class="team-bio">
				CEO and an original investor in Z Corporation
				<br>
				<br>
				<div id="idLinkedInIcon" onclick="https://www.linkedin.com/in/marinahatsopoulos/"</div>
			    </div>
			</div>
			<div class="team-name">Marina Hatsopoulos</div>
			<!--
			<div class="team-role"></div>
			<div class="team-area"></div>
			-->
		    </div>
		    <div class="team container col-md-4">
				    <a href="https://www.linkedin.com/search/results/all/?keywords=WILLIAM%20SONNEBORN&origin=GLOBAL_SEARCH_HEADER&sid=NFR">
				    <img class="team-picture" src="images/speaker/william-sonneborn.jpg"></a>
			<div class="overlay">
			    <div class="team-bio">
				Global Director of Disruptive Technologies, PE and VC at IFC
				<br>
				<br>
				<div id="idLinkedInIcon" onclick="https://www.linkedin.com/search/results/all/?keywords=WILLIAM%20SONNEBORN&origin=GLOBAL_SEARCH_HEADER&sid=NFR"</div>
			    </div>
			</div>
			<div class="team-name">William Sonneborn</div>
			<div class="team-role">Finance</div>
			<!--
			<div class="team-area"></div>
			-->
		    </div>
	    </div>
	</div>
    
    
    
    
    
    
        <!--
        <div class="row text-center">

        <div class="col-lg-12 comp-content" id="speaker-section-expanded">
            <p class="section-header section-header-page" style="color: white; font-size: 1.7em">Speakers</p>
            <h4 style="text-align: left;">MIT GSW is proud to host a diverse range of speakers from Cambridge and around the world. 
            We're excited to have these world class individuals share their experiences with us!
            </h4>

            <h4 style="text-align: left;"> Click on each speaker to learn more about their background and accomplishments</h4>
            <br> <br>
        -->
            <!-- <div class="row speaker-expanded-bio">
                <div class="col-md-3"></div>
                <div class="col-md-9"></div>
            </div> -->

            <!---
            <div class="col-lg-12 comp-content" id="plenary-section-expanded">
                <p class="section-header section-header-page" style="color: white">Plenary Speakers</p>
                <div class="row speaker-expanded-bio">
                    <div class="col-md-3"></div>
                    <div class="col-md-9"></div>
                </div>
            </div>
            --->
            
            
     

            <!--
            <div class="col-lg-12 comp-content" id="keynote-section-expanded">
                <p class="section-header section-header-page" style="color: white">Keynotes</p>
                <div class="row speaker-expanded-bio">
                    <div class="col-md-3"></div>
                    <div class="col-md-9"></div>
                </div>
            </div>
            <div class="col-lg-12 comp-content" id="speaker-section-expanded">
                <p class="section-header section-header-page" style="color: white">Panelists</p>
                <div class="row speaker-expanded-bio">
                    <div class="col-md-3"></div>
                    <div class="col-md-9"></div>
                </div>
            </div>
            -->
 


<div id="speaker-modals">

</div>

<div class="modal fade" id="modal-text" tabindex="-1" role="dialog" aria-labelledby="modal-text-label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="document.getElementById('video').pause();">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                

        
            </div>
        </div>
    </div>
</div>

<style>
    
</style>


	<script src="assets/js/papaparse.min.js"></script>
	<script src="assets/js/main.js?v=1.1"></script>
	<script src="assets/js/jquery.min.js"></script>
</body>

<?php
include("templates/footer.php");
?>


