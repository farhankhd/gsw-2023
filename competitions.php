<?php
    $pageTitle = 'Startup Pitch Competition | MIT Global Startup Workshop 2023';
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
        Startup Pitch Competition
    </h1>
    </div>
</div>
<div class="section">
	<div style="color:white;">
		Are you an entrepreneur trying to take your startup to the next level? The MIT GSW Startup Pitch Competition is an opportunity for you to pitch your company and compete for a chance to win seed money to scale your startup.
		<!--<p class="competition-slogan">Are you an entrepreneur trying to take your startup to the next level?<br>
		The MIT GSW Business Plan Competition is an opportunity for you to pitch your company and compete for a chance to win seed money to scale your startup.
		<br><br><span class="competition-rules">For additional detail on format and eligibility requirements, <a class="competition-rules-link" href="Rules.pdf"><strong>please read the BPC Rules here</strong></a> before applying.</span>
		</p>
		-->
   	 </div>

	<br>
	
	<div class="section-header section-header-page" style="color: white">Eligibility Criteria</div>
		<div class="">
		    <div class="row">
			<div class="col-xs-12">
			    <div classs="trn"> Teams must meet all the following requirements to be eligible to compete in the Startup Pitch Competition.</div>
				    <ul>
					    <li class="trn"><strong class="trn">Applicant Eligibility: </strong>Anyone from any discipline and from any organization, including colleges and universities, government laboratories, research institutions, non-profit organizations, and for-profit companies</li>
					    <li class="trn"><strong class="trn">Stage Eligibility: </strong>Startups should have a beta product/service/prototype. Ideation startups are not eligible to compete</li>
					    <li class="trn"><strong class="trn">Prior Funding Limitations: </strong>Startups that have raised more than EUR 1,000,000  in equity capital from sources other than self-funding, friends, or family prior to March 2023 are not eligible to compete. Teams can engage in discussions to raise equity before the conference, but shouldn’t have officially raised more than the maximum amount before the conference.</li>
				    </ul>  
					<br> In addition, the following funding sources do not contribute towards the EUR 1,000,000 limit:
				    <ul> 
					    <li class="trn"> Contributions from friends, family, and mentors</li>
				 	    <li class="trn"> Research and funding grants</li>
					    <li class="trn"> Winnings from prior competitions</li>
					    <li class="trn"> Traditional debt instruments (does not include convertible notes towards equity)</li> 
				    </ul>
			    </div>
			</div>
		</div>	
	</div>
			  
		
<div class="section">
    <hr />
</div>


<?php
    include('templates/footer.php');
?>

    
    
   >
