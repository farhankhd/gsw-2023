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
	    
	    a {
	    	text-decoration: none;
	    }
	   
	    .collapsible {
		    background-color: #EB966E;
		    
		    color: white;
		    cursor: pointer;
		    padding: 18px;
		    width: 100%;
		    border: none;
		    text-align: left;
		    outline: none;
		    font-size: 15px;
	    }
	    .active, .collapsible:hover {
		    background-color: rgb(226, 109, 54);
	    }
	    .collapsible:after {
		    content: '\002B';
		    color: white;
		    font-weight: bold;
		    float: right;
		    margin-left: 5px;
	    }
	    .active:after {
		    content: "\2212";
	    }
	    .content {
		  padding: 0 18px;
		  max-height: 0;
		  overflow: hidden;
		  transition: max-height 0.2s ease-out;
		  background-color: rgb(226, 109, 54);
	    }


	@media all and (max-width: 768px) and (orientation: portrait) {
	  .button {
	    width: 100%;
	  }
	}

	/* *** buttons *** */

	.button {

	  width: calc(90% - 8px);
		width: -o-calc(90% - 8px);
		width: -moz-calc(90% - 8px);
		width: -webkit-calc(90% - 8px);
		width: expression(90% - 8px);
	  height: auto;
	  padding: 20px 0px 20px 0px;
	  margin: 10px auto;
	  cursor: pointer;

	  font-family: "Helvetica";
	  font-size: 20px;
	  font-weight: 400;
	  text-transform: uppercase;
	  text-align: center;

	  -o-transition:.25s;
		-ms-transition:.25s;
		-moz-transition:.25s;
		-webkit-transition:.25s;
		transition:.25s;

	  width: 25%;
	  height: auto;
	  align-content: center;
	}

	.button.style {
		border: 4px solid rgb(226, 109, 54);
		border-radius: 50px;
		color: rgb(226, 109, 54);
	}

	a:hover .button.style {
	  background-color: rgb(226, 109, 54);
	  color: #fff;

	}


    </style>

</head>
<body>

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
   	 </div>

	<br>
	
	<div class="section-header section-header-page" style="color: white">Prizes</div><div class="comp-section">
   	<div class="row">
		<div class="col-xs-12">
			<ul>
				<li style="color:white;" class="trn"><strong class="trn">1st Place</strong>- $5,000 cash prize, paid trip to Boston (airfare and hotel up to $5,000) with pre-planned itinerary connecting the team with Boston and MIT entrepreneurship resources such as Martin Trust Center, MIT Media Lab, etc., dedicated Venture Mentoring Services support</li>

				<li style="color:white;" class="trn"><strong class="trn">2nd Place</strong> - $3,000 cash prize, dedicated Venture Mentoring Services support specialized to team needs</li>
				<li style="color:white;" class="trn"><strong class="trn">3rd Place (Audience Choice)</strong> - $1,500 cash prize</li>
			</ul>
		</div>
	</div>
					
			
    
    <div class="section-header section-header-page" style="color: white">Eligibility Criteria</div><div class="comp-section">
    <div class="row">
        <div class="col-xs-12">
            <div style="color:white;" class="trn">Teams must meet all the following requirements to be eligible to compete in the Startup Pitch Competition.</div>
            
            <br>
		<button class="collapsible">Applicant Eligibility</button>
            	<div class="content">
                	<ul>
				<li style="color:white;" class="trn"><strong class="trn">Applicant Eligibility: </strong>Anyone from any discipline and from any organization, including colleges and universities, government laboratories, research institutions, non-profit organizations, and for-profit companies.</li>

				<li style="color:white;" class="trn"><strong class="trn">Stage Eligibility: </strong>Startups should have a beta product/service/prototype. Ideation startups are <strong>not eligible</strong> to compete.</li>

				<li style="color:white;" class="trn"><strong class="trn">Prior Funding Limitations: </strong>Startups that have raised more than EUR 1,000,000 in equity capital from sources other than self-funding, friends, or family prior to March 2023 are <strong>not eligible</strong> to compete. Teams can engage in discussions to raise equity before the conference, but shouldn’t have officially raised more than the maximum amount before the conference. The EUR 1,000,000 limit applies to all dilutive funding sources such as but not limited to direct equity investments, SAFE, angel investments, professional investment, or from FF.</li>

				<br> 

				<div style="color:white;">In addition, the following funding sources do not contribute towards the EUR 1,000,000 limit: </div>
				    <ul>
				    <li style="color:white;" class="trn"> Contributions from friends, family, and mentors</li>
				    <li style="color:white;" class="trn"> Research and funding grants</li>
				    <li style="color:white;" class="trn"> Winnings from prior competitions</li>
				    <li style="color:white;" class="trn"> Traditional debt instruments (does not include convertible notes towards equity)</li> 
				    </ul>
				<br>


				    <li style="color:white;" class="trn"><strong class="trn">Market Requirements: </strong>The startup must be based in or have operations in Greece or Europe to be eligible to compete.</li>

				    <li style="color:white;" class="trn"><strong class="trn">Venture Limitations: </strong>The Startup Pitch Competition is meant to provide an avenue for early-stage startups to receive funding and accelerate their venture. Generally, the following types of ventures will <strong>not be eligible to apply</strong>: ventures within existing corporations, spinouts from existing corporations, franchises, and licensing agreements for distribution in a different geographical area.</li>

				    <li style="color:white;" class="trn"><strong class="trn">Team Presentation: </strong>At least two and up to three team members must attend the final pitch and be involved in the Q+A. All attending team members will need to complete the online conference registration process.</li>

				    <li style="color:white;" class="trn"><strong class="trn">Team Composition: </strong>At least two team members must be registered in the online competition application to be eligible to compete.</li>

				    <li style="color:white;" class="trn"><strong class="trn">Pre-Conference Workshop and Mentorship: </strong>
					<ul>
						<li style="color:white;" class="trn"> All finalist teams will be required to attend an online pitch workshop organized by MIT in Feb 2023/early Mar 2023.</li>
						<li style="color:white;" class="trn"> All finalist teams are required to meet virtually with their assigned mentor once before the conference.</li>
					</ul>
				    <li style="color:white;" class="trn"><strong class="trn">At-Conference Mentorship: </strong>All finalist teams will meet in person for 30 minutes with their mentor during the first day of the conference to practice and finalize their decks and pitches.</li>
				    <li style="color:white;" class="trn"><strong class="trn">Availability: </strong>All teams must be at the conference for registration on the morning of Thursday, March 30th, 2023.</li>
				    <li style="color:white;" class="trn"><strong class="trn">Disclaimer: </strong>The Global Startup Workshop competition committee reserves the right to include or exclude any teams for any reason.</li>
				    <li style="color:white;" class="trn"><strong class="trn">Disclosure: </strong>Teams agree that GSW can use materials shared with GSW in applications and for conference presentations in future years without limitation. This includes but is not limited to sharing publicly in photographs, example files for future years, and social media.</li>

			</ul>

        	</div>
	</div>
	</div>
	<br>

 <a href="https://docs.google.com/forms/d/e/1FAIpQLScGcvXe5ioa0kCA6X9UsN-wxMntEF_qolskXs7sgE_3z3AYnA/viewform?usp=sf_link"><!-- link in here -->
    <div class="button style">Apply Now 
    </div>
  </a>

	<br>
 
<div class="section">
    <hr>
</div>
<script>
	var coll = document.getElementsByClassName("collapsible");
	var i;

	for (i = 0; i < coll.length; i++) {
	  coll[i].addEventListener("click", function() {
	    this.classList.toggle("active");
	    var content = this.nextElementSibling;
	    if (content.style.maxHeight){
	      content.style.maxHeight = null;
	    } else {
	      content.style.maxHeight = content.scrollHeight + "px";
	    } 
	  });
	}
</script>
	

</body>
<?php
    include('templates/footer.php');
?>
