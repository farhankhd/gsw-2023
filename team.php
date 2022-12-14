<?php
    $pageTitle = 'Team | MIT Global Startup Workshop 2023';
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

<div class="parallax-window header" data-parallax="scroll" style="background-image: url('images/team/team1.jpg');">
    <div class="header-overlay">
    <h1 class="parallax-text">
        Who we are
    </h1>
    </div>
</div>

<!-- <div data-parallax="scroll" class="parallax-window header" style="background-image: url('headers/img/Team.jpg'); <div class="brand">
<h1 class="parallax-text">Who we are</h1></div></div> -->

<div class="section">
	<div style="color:white;">
        	Our team consists of individuals across all parts of the MIT campus, and is supported by an accomplished advisory board.
    	</div>
	
	<br>
	
	<div class="section-header section-header-page" style="color: white">Managing Directors</div>
	<div class="row team-row text-center"><!-- <div class="col-xs-12"><h2>Directors</h2></div> -->
		<div class="team container col-md-4">
			<a href="https://www.linkedin.com/in/farhan-khodaee-62212242/">
			<img class="team-picture" src="images/team/Farhan.jpg"></a>
			<div class="overlay">
				<div class="team-bio">
					Farhan is a PhD candidate in the Mechanical Engineering/Bioengineering program at MIT. 
					Prior to graduate school, he worked in the medical device industry for several years in different sectors ranging from transfusion technology to diabetes and dental. 
					Farhan is passionate about medical technology entrepreneurship, especially around creating novel drugs and therapeutic platforms. 
					He has been part of medical innovation teams across the world and is enthusiastic about making clinical technologies more accessible globally. 
					In his spare time, he enjoys hiking, playing soccer, cooking and drawing.
					<br>
					<br>
					<div id="idLinkedInIcon" onclick="https://www.linkedin.com/in/farhan-khodaee-62212242/');" title="Team | MIT Global Startup Workshop 2023">in</div>
				</div>
				
			</div>
			<div class="team-name">Farhan Khodaee</div>
			<div class="team-role">Co-Director</div>
			<div class="team-area">MIT School of Engineering</div>
		</div>
		<div class="team container col-md-4">
			<a href="#teamAnnaeckhoff">
			<img class="team-picture" src="images/team/Anna.jpg"></a>
			<div class="overlay">
				<div class="team-bio">
					Anna is a dual degree student currently working towards both a Masters in Business Administration at MIT Sloan School of Management and a Masters in Public Administration at the Harvard Kennedy School of Government. 
					Prior to graduate school, Anna worked at Bain & Company and at The Nature Conservancy. 
					Anna is passionate about social impact entrepreneurship, especially around sustainability and climate change resilience. 
					One of her proudest achievements was working with The Republic of the Marshall Islands to launch the sustainable tuna company, Pacific Island Tuna. 
					Anna has a BA in Economics and History from the University of Chicago.
					<br>
					<br>
					<div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/annaeckhoff');" title="Team | MIT Global Startup Workshop 2023">in</div>
				</div>
			</div>
			<div class="team-name">Anna Eckhoff</div>
			<div class="team-role">Co-Director</div>
			<div class="team-area">MIT Sloan School of Management</div>
		</div>
		<div class="team container col-md-4">
			<a href="#teamDanielaGorza">
			<img class="team-picture" src="images/team/daniela.jpeg"></a>
			<div class="overlay">
				<div class="team-bio">
					Daniela Gorza is a Master of Business Administration (MBA) candidate at MIT Sloan School of Management, and is the President of the Italy Club at MIT Sloan. 
					Prior to the MBA, she worked for several years at the World Bank Group and Inter-American Development Bank. 
					She also has experience in Asia as a consultant to advise European and American businesses in their expansion into emerging Asian economies like Vietnam and China. 
					Daniela holds a Double Degree in Public Administration and Government from the London School of Economics and Peking University. 
					She spends her free time traveling, doing reformer pilates, and eating and cooking delicious Italian and French food.
					<br>
					<br>
					<div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/danielagorza/');" title="Team | MIT Global Startup Workshop 2023">in</div>
				</div>
			</div>
			<div class="team-name">Daniela Gorza</div>
			<div class="team-role">Co-Director</div>
			<div class="team-area">MIT Sloan School of Management</div>
		</div>
	</div>
	<div>

	<div class="section-header section-header-page" style="color: white">Organizing Team</div>
	<div class="team-row text-center">
		<div class="row">
		<div class="team container col-sm-6 col-md-4"><a href="#teamTomLuly">
			<img class="team-picture" src="images/team/Madi.jpg"></a>
			<div class="overlay">
				<div class="team-bio">
					Madison is a National Science Foundation Graduate Research Fellow in the Department of Mechanical Engineering at MIT. 
				    	Her research is in product design and engineering for global development and global health applications, and she is currently incubating a medical device start-up in MIT???s Sandbox program. 
				    	She has a BS in Mechanical Engineering and a Certificate in Engineering Design from Penn State, as well as a Certificate in Product Design from the National University of Singapore. 
				    	Her research and industry experience spans medical engineering, assistive technology development, ergonomics, off-grid mechanization, and co-design with rural communities. 
				    	In her spare time, she plays for the MIT Club Volleyball Team and bakes bread. 
					<br>
					<br>
					<a href='https://mareddie.weebly.com/'><i class="fa-brands fa-weebly"></i></a>
				</div>
			</div>
			<div class="team-name">Madison Reddie</div>
			<div class="team-role">Content Team - Agenda Design Lead</div>
			<div class="team-area">MIT MechE</div>
		</div>
		<div class="team container col-sm-6 col-md-4"><a href="#teamLenaDownes">
			<img class="team-picture" src="images/team/Jenny.jpg"></a>
			<div class="overlay">
				<div class="team-bio">
					Jenny is a Masters in Business Administration (MBA) candidate at MIT Sloan School of Management. 
					She operates at the intersection of business and human-centered design, and focuses on reimagining business challenges through incorporating design principles. 
					At MIT, she is a Vice President of the Entrepreneurship Club. 
					Prior to graduate school, Jenny worked at Deloitte Consulting, where she helped Fortune 500 companies deliver optimal employee integration experiences during Mergers & Acquisitions. 
					She has a Bachelor of Arts in Economics from Claremont McKenna College. 
					In her spare time, Jenny enjoys rock-climbing, being outdoors, and collecting good stories.
					<br>
					<br>
					<div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/jennycang/');" title="Team | MIT Global Startup Workshop 2023">in</div>
				</div>
			</div>
			<div class="team-name">Jenny Cang</div>
			<div class="team-role">Content Team - Co-Speakers Lead</div>
			<div class="team-area">MIT MBA '24</div>
		</div>
       		<div class="team container col-sm-6 col-md-4"><a href="#teamZoeWolszon">
			<img class="team-picture" src="images/team/Pooja.jpg"></a>
			<div class="overlay">
				<div class="team-bio">
					Pooja is a Masters of Business Administration (MBA) candidate at MIT Sloan School of Management. 
					At MIT, she is a Senior Vice President of the Sloan Entrepreneurship Club and of the Sloan Healthcare Club. 
					Prior to graduate school, Pooja worked in management consulting focused on biotechnology and healthcare. 
					She has also worked with multiple early stage healthcare startups to help them to grow and scale their technologies. 
					She is passionate about how artificial intelligence and analytics can democratize healthcare, and is particularly excited about mental health.  
					Pooja has a Bachelor of Science in Neuroscience from Lehigh University. In her free time, she enjoys art, yoga, and exploring coffee shops.
					<br>
					<br>
					<div id="idLinkedInIcon" onclick="window.open('http://www.linkedin.com/in/poojamalhotra320');" title="Team | MIT Global Startup Workshop 2023">in</div>
				</div>	
			</div>
			<div class="team-name">Pooja Malhotra</div>
			<div class="team-role">Content Team - Co-Speakers Lead</div>
			<div class="team-area">MIT MBA '23</div>
        	</div>
        	</div>
	    
		<br>
	   
        	<div class="row">
		<div class="team container col-sm-6 col-md-6"><a href="#teamJoaquinRichards">
			<img class="team-picture" src="images/team/Vineet.jpg"></a>
			<div class="overlay">
				<div class="team-bio">
					Vineet is a PhD candidate in the Computational Science & Engineering program. 
					He conducts research in the Active-Adaptive Control Lab in the Mechanical Engineering department - applying tools from optimization, control theory, and machine learning to model smart grids & transportation networks. 
					Prior to MIT, Vineet completed an MPhil in Energy Technologies at the University of Cambridge as a Gates Scholar and received his undergraduate degree in Mechanical Engineering & Economics from UC Berkeley. 
					Outside GSW, he is currently a Co-President of the MIT Energy & Climate Club and previously served as Co-Managing Director for the 2022 MIT Energy Conference. 
					In addition to research, he has industry experience through internships at Siemens, NREL, Avangrid and Applied Materials. 
					In his spare time, he enjoys hiking, tennis, working out and singing.
					<br>
					<br>
					<div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/nairvineet9/');" title="Team | MIT Global Startup Workshop 2023">in</div>
				</div>
			</div>
			<div class="team-name">Vineet Jagadesan Nair</div>
			<div class="team-role">Operations Team - Internal Relations</div>
			<div class="team-area">MIT MechE</div>
        	</div>
        	<div class="team container col-sm-6 col-md-6"><a href="#teamMayaNasr">
            		<img class="team-picture" src="images/team/Katie.JPG"></a>
			<div class="overlay">
				<div class="team-bio">
					Katie's Bio Coming Soon!
				</div>
			</div>
			<div class="team-name">Katie Chen</div>
			<div class="team-role">Operations Team - External Relations</div>
			<div class="team-area">MIT IDM</div>
        	</div>
		</div>
		
		<br>
		
		<div class="row">
		<div class="team container col-sm-6 col-md-4"><a href="#teamSarahCen">
			<img class="team-picture" src="images/team/Tiasa.jpg"></a>
			<div class="overlay">
				<div class="team-bio">
					Tiasa is a recent graduate from Wellesley College, earning a Bachelor's of Arts (B.A.) in Computer Science. 
					Beyond her time at Wellesley, she has been extensively involved in the MIT community as a cross-registered student in the Departments of Electrical Engineering & Computer Science, Urban Studies & Planning, and Integrated Design & Management. 
					She is also an Online Course Developer for MIT Energy Initiative, iHQ Innovation Ambassador, and Gordon Engineering Leader. 
					Her professional interest lies in the urban mobility / sustainable transportation and entrepreneurship space. 
					Aside from school, Tiasa enjoys solo traveling, dancing, visiting a local cafe, and empowering clients as a [solidcore] fitness coach. 
				</div>
				<br>
				<br>
				<div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/tiasakim/');" title="Team | MIT Global Startup Workshop 2023">in</div>
			</div>
			<div class="team-name">Tiasa Kim</div>
			<div class="team-role">Marketing Team - Media Lead</div>
			<div class="team-area">Wellesley College, B.A. Computer Science '23</div>
		</div>
		<div class="team container col-sm-6 col-md-4"><a href="#teamJennaAronson">
			<img class="team-picture" src="images/team/Liv_J.jpg"></a>
			<div class="overlay">
				<div class="team-bio">
					Olivia is a Masters of Business Administration (MBA) candidate at MIT Sloan School of Management. 
					She is a Co-lead of the Food & Agriculture Club and is involved in the sustainability ecosystem at MIT. 
					Prior to graduate school, Olivia worked as a Management Consultant at Accenture, focusing on regulatory change management and risk mitigation within financial services. 
					She is passionate about climate change and is looking to transition her career to focus on clean energy following MIT. 
					Olivia has a Bachelor of Business Administration from the University of Michigan. 
					She spends her free time snowboarding, playing soccer, and listening to entomology podcasts.
					<br>
					<br>
					<div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/oliviajjones/');" title="Team | MIT Global Startup Workshop 2023">in</div>
				</div>
			</div>
			<div class="team-name">Olivia Jones</div>
			<div class="team-role">Marketing Team - Content Lead</div>
			<div class="team-area">MIT MBA '24</div>
		</div>  
		<div class="team container col-sm-6 col-md-4"><a href="#teamSheaLombardo">
	    		<img class="team-picture" src="images/team/Shea.jpg"></a>
			<div class="overlay">
				<div class="team-bio">
					Dominic's Bio Coming Soon!
				</div>
			</div>
			<div class="team-name">Dominic Co</div>
			<div class="team-role">Marketing Team - Design Lead</div>
			<div class="team-area">MIT Architecture Design & EECS</div>
		</div>
    		</div>
		
		<br>
	   
        	<div class="row">
		<div class="team container col-sm-6 col-md-6"><a href="#teamJoaquinRichards">
			<img class="team-picture" src="images/team/Layla.jpg"></a>
			<div class="overlay">
				<div class="team-bio">
					Layla is a Masters of Science (S.M.) in Technology and Policy candidate at MIT Schwarzman College of Computing. 
					Aside from being a part of GSW, she is a Wellness Ambassador for the Office of Student Wellbeing at MIT, Associate Editor for the MIT Science Policy Review and Treasurer for the Persian Student Association at MIT. 
					She is passionate about Worker Health and Safety, Ergonomics, and AI policy. 
					Before MIT, she completed her degree in Industrial and Systems Engineering from Auburn University. 
					Outside of school, she enjoys drawing portraits, watching documentaries and learning languages.
					<br>
					<br>
					<div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/layla-arai');" title="Team | MIT Global Startup Workshop 2023">in</div>
				</div>
			</div>
			<div class="team-name">Layla Araiinejad</div>
            		<div class="team-role">Community Engagement Lead</div>
            		<div class="team-area">MIT TPP</div>
        	</div>
        	<div class="team container col-sm-6 col-md-6"><a href="#teamMayaNasr">
            		<img class="team-picture" src="images/team/Prem.jpg"></a>
			<div class="overlay">
				<div class="team-bio">
					Prem's Bio Coming Soon!
				</div>
			</div>
			<div class="team-name">Prem</div>
			<div class="team-role">Community Impact Lead</div>
			<div class="team-area">MIT</div>
        	</div>
		</div>
		
		<br>
		
		<div class="row">
		<div class="team container col-sm-6 col-md-4"><a href="#teamTomLuly">
			<img class="team-picture" src="images/team/Rishabh.jpg"></a>
			<div class="overlay">
				<div class="team-bio">
					Rishabh is a Masters of Business Administration (MBA) candidate at MIT Sloan School of Management and SVP of the Product Management Club. 
					Prior to school, Rishabh worked as a Program Manager scaling early-stage startups at a Google for Startups hub in Dubai. 
					Previously he also helped set up the Family Business Consulting practice at PwC India. 
					Rishabh holds an engineering degree in Electronics from the Delhi College of Engineering, India. 
					He spends his free time reading books on asian political history, traveling and exploring local cuisines. 
					<br>
					<br>
					<div id="idLinkedInIcon" onclick="window.open('https://www.linkedin.com/in/rishabhgoyal95');" title="Team | MIT Global Startup Workshop 2023">in</div>
				</div>
			</div>
			<div class="team-name">Rishabh Goyal</div>
			<div class="team-role">Competitions Team - Design Lead</div>
			<div class="team-area">MIT MBA '23</div>
		</div>
		<div class="team container col-sm-6 col-md-4"><a href="#teamLenaDownes">
			<img class="team-picture" src="images/team/Olivia_G.jpg"></a>
			<div class="overlay">
				<div class="team-bio">
					Olivia's Bio Coming Soon!
				</div>
			</div>
			<div class="team-name">Olivia Gebhardt</div>
			<div class="team-role">Competitions Team - Prizes Lead</div>
			<div class="team-area">MIT MBA '24</div>
		</div>
       		<div class="team container col-sm-6 col-md-4"><a href="#teamZoeWolszon">
			<img class="team-picture" src="images/team/Noah.jpg"></a>
			<div class="overlay">
				<div class="team-bio">
					Noah is a Masters in Business Administration (MBA) candidate at MIT Sloan School of Management. 
					At MIT, he is on the organizing committee for the 100K Startup Competition and is also working on a fintech analytics startup. 
					Prior to graduate school, Noah worked at Elliott Management, a multi-strategy hedge fund, where he covered the global oil market for the commodities group. 
					He has a Bachelor of Arts in Mathematics and Economics from Washington University in St. Louis. 
					In his spare time, Noah enjoys hiking, reading, and poker.
				</div>
			</div>
			<div class="team-name">Noah Roberts</div>
			<div class="team-role">Finance Lead</div>
			<div class="team-area">MIT MBA '24</div>
        	</div>
        	</div>
	    
		

<div class="section">
    <hr />
</div>

<!--<div class="section" id="team-section-expanded">
<div class="row team-expanded-bio"><span class="anchor" id="teamAditiGupta"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamAditiGupta"><img class="team-picture" src="images/team/Aditi.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">Aditi Gupta</div><div class="team-expanded-role">Co-Director</div><div class="team-expanded-text">Aditi is a PhD Candidate in Medical Engineering &amp; Medical Physics in the Harvard-MIT Health Sciences &amp; Technology program. Her research, done with the Human Systems Lab in MIT AeroAstro, focuses on human-exoskeleton adaptation. She is passionate about human-centered design and spends her spare time advocating and working on issues of representation, diversity &amp; equity in STEM. She hopes to one day apply her knowledge and skills to tackling issues of social justice around the world. She hails from Southern California and remains grounded through photography, travel, dance, and spending time in the outdoors with friends and family.</div></div></div><div class="row team-expanded-bio"><span class="anchor" id="teamKiranWattamwar"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamKiranWattamwar"><img class="team-picture" src="images/team/Kiran.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">Kiran Wattamwar</div><div class="team-expanded-role">Co-Director</div><div class="team-expanded-text">Kiran is from Edison, NJ and is currently based in Cambridge. She's a candidate of the Masters in Design Engineering, an interdisciplinary program offered by Harvard's Graduate School of Design and School of Engineering and Applied Sciences. She's also a recent MIT'17 graduate, having studied Computer Science and Architecture. She is a strong proponent of interdisciplinary approaches to complex programs. Her belief is that good product design requires attention to three core values ??? empathy, innovation and elegance. In developing startups and large corporations, attention to these details and their broader systemic impacts is key. She's excited to see how tech continues to grow.</div></div></div><div class="row team-expanded-bio"><span class="anchor" id="teamMJAntonini"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamMJAntonini"><img class="team-picture" src="images/team/MJ.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">MJ Antonini</div><div class="team-expanded-role">Co-Director</div><div class="team-expanded-text">MJ is a Ph.D Candidate in Medical Engineering and Medical Physics at the Harvard-MIT Health Science and Technology Program. Born and raised in Corsica, France, he completed his undergraduate and graduate studies in mechanical and industrial engineering at Arts &amp; M??tiers ParisTech, he then pursued a M.Sc in biomedical engineering at the Imperial College London building a 3d printed prosthetic hand, and learned neurosciences while studying neuronal dysfunction in a new animal model of Huntington???s Disease. He is currently completing his Ph.D research in Polina Anikeeva's lab where he is working on the development of polymer fibers for multimodal neural recording and stimulation. Outside engineering and neurosciences, he enjoys to travel the world, rock climbing and cooking. </div></div></div><div class="row team-expanded-bio"><span class="anchor" id="teamSarahCen"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamSarahCen"><img class="team-picture" src="images/team/Sarah.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">Sarah Cen</div><div class="team-expanded-role">Content Team Lead</div><div class="team-expanded-text">Sarah is a Ph.D. candidate in the Laboratory for Information and Decision Systems of the Electrical Engineering and Computer Science Department at MIT. She completed her undergraduate degree in mechanical engineering at Princeton University then spent two years pursuing a master???s in robotics and mobile autonomy at the University of Oxford. Driven by curiosity, she has explored various fields, from space and software engineering to sociology and journalism. Motivated by empathy, she draws inspiration from social systems both among humans and in nature. In studying statistical inference and machine learning, she seeks to focus her attention on the transition from technological explainability to innovation.</div></div></div><div class="row team-expanded-bio"><span class="anchor" id="teamJennaAronson"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamJennaAronson"><img class="team-picture" src="images/team/Jenna.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">Jenna Aronson</div><div class="team-expanded-role"> Competitions Team Lead </div><div class="team-expanded-text">Jenna is a PhD Student in Brain &amp; Cognitive Sciences at MIT. As Neurobiological Engineering Training Program Fellow and member of Ed Boyden's Synthetic Neurobiology Group, she is passionate about her research developing and applying technology for understanding and diagnosing the neurodegenerative brain. Outside of GSW, Jenna is director of the Entrepreneurship Initiative of the MIT Biotech Group, and is involved in leading other initatives on campus and around the world geared towards the confluence of biotech, entrepreneurship, equality in STEM, and social/educational impact. In her spare time, Jenna loves running, sailing, cooking and traveling. </div></div></div><div class="row team-expanded-bio"><span class="anchor" id="teamSheaLombardo"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamSheaLombardo"><img class="team-picture" src="images/team/Shea.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">Shea Lombardo</div><div class="team-expanded-role">Media Team Lead</div><div class="team-expanded-text">Seamus is originally from Nanuet, NY and is now currently based in Cambridge, MA. He is a graduate student in the Aeronautical and Astronautical Engineering department at MIT, working under Dr. Leia Stirling on research related to spacesuit performance. He received his BS in Aerospace Engineering from SUNY Buffalo in 2018 and has previously interned throughout the aerospace engineering industry at Millennium Space Systems, SpaceX, and NASA. In addition to his passion for space exploration, Seamus is also involved in politics as the Vice President of MIT Democrats and a member of MITvote. Outside of MIT Seamus enjoys playing guitar with his family and doing freelance logo design.</div></div></div><div class="row team-expanded-bio"><span class="anchor" id="teamTomLuly"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamTomLuly"><img class="team-picture" src="images/team/Tom.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">Tom Luly</div><div class="team-expanded-role">External Relations Team Lead</div><div class="team-expanded-text">Tom is Senior Program Manager at the MIT Innovation Initiative, a cross-school effort to strengthen and promote innovation and entrepreneurship at MIT. He works with a diverse team of faculty, staff, and students to develop and implement new pathways for the MIT community to move powerful ideas from conception to impact. His prior professional experience includes roles with the MIT Skoltech Initiative and the Carnegie Endowment in Moscow, where he studied the role of innovation clusters in economic and political development. </div></div></div><div class="row team-expanded-bio"><span class="anchor" id="teamChrisChantre"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamChrisChantre"><img class="team-picture" src="images/team/Chris.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">Chris Chantre</div><div class="team-expanded-role">Content Team</div><div class="team-expanded-text">Christophe is concluding his Ph.D. at the University of Zurich in Bioengineering, while doing most of his research at the Disease Biophysics Group at Harvard University. He grew up in Geneva, Switzerland and completed his BS and MA in mechanical engineering at the Swiss Institutes of Technology Lausanne and Zurich, respectively. His principal area of research is in designing novel materials for regenerative medicine applications, and is currently investigating opportunities to bring these products to the clinic. Outside of work, Christophe loves traveling, rock climbing, and reading. </div></div></div><div class="row team-expanded-bio"><span class="anchor" id="teamEmilyHsiao"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamEmilyHsiao"><img class="team-picture" src="images/team/Emily.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">Emily Hsiao</div><div class="team-expanded-role">Content Team</div><div class="team-expanded-text">Emily is a dual-degree student at MIT Sloan (MBA) and Harvard Kennedy School (MPA/ID). Previously, she worked as a management consultant at Bain and Company and in innovation and change management at the World Food Programme. Most recently, she was a fellow in rural non-profit and social enterprise scale-up strategy at IMAGO Global Grassroots. She is also the co-founder and COO of Nesuku, an education technology company. She received her undergraduate degree in international studies and business at the University of Pennsylvania. Emily is a native of Ann Arbor, Michigan, and in her spare time, she enjoys classical singing, traveling, and cooking for friends. </div></div></div><div class="row team-expanded-bio"><span class="anchor" id="teamJoaquinRichards"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamJoaquinRichards"><img class="team-picture" src="images/team/Joaquin.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">Joaquin Richards</div><div class="team-expanded-role">Content team</div><div class="team-expanded-text">Industrial Engineer @ ITBA and MBA @ MIT. Specialized on Product Management, Analytics and Business Strategy on digital platforms.</div></div></div><div class="row team-expanded-bio"><span class="anchor" id="teamMayaNasr"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamMayaNasr"><img class="team-picture" src="images/team/Maya.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">Maya Nasr</div><div class="team-expanded-role">Content Team</div><div class="team-expanded-text">Maya is a first year graduate student in the Aerospace Engineering department at MIT, working with Dr. Jeffrey Hoffman on the Mars Oxygen ISRU Experiment (MOXIE) for NASA Jet Propulsion Lab???s Mars 2020 rover mission. A native of Lebanon, Maya received her BS in Aerospace Engineering from MIT in 2018. She has previously worked on several projects including NASA???s Cassini mission activity on Titan and NASA???s New Frontiers Saturn Probe mission. She was also one of the leads in the MIT Global Startup Labs (GSL) program in Peru in summer 2018. Outside of MIT, Maya loves traveling around the world and writing Arabic poetry.</div></div></div><div class="row team-expanded-bio"><span class="anchor" id="teamSantiagoMelo"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamSantiagoMelo"><img class="team-picture" src="images/team/Santiago.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">Santiago Melo</div><div class="team-expanded-role">Competitions Team</div><div class="team-expanded-text">Santiago is dual degree student at MIT (MBA) and Harvard (MPA) and holds an Engineering degree from Universidad de Los Andes. He previously worked at Acumen, a pioneering impact investing fund, launching its operations in Latin America. Most recently, Santiago interned at The Engine and Amazon.  </div></div></div><div class="row team-expanded-bio"><span class="anchor" id="teamVananhSu"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamVananhSu"><img class="team-picture" src="images/team/VanAnh.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">Van-Anh Su</div><div class="team-expanded-role">Competitions Team</div><div class="team-expanded-text"> Van-Anh is a dual degree candidate at MIT Sloan (MBA) and the Harvard Kennedy School (MPA in International Development). Previously, she worked in strategy roles at DaVita (Fortune 500 healthcare company) and FHI 360 (international development organization). Most recently, Van-Anh was an advisor to the Rwanda Development Board, a cabinet level government agency responsible for attracting private investment into the Rwanda economy. She received her undergraduate degree in Economics and International Relations at Claremont McKenna College.</div></div></div><div class="row team-expanded-bio"><span class="anchor" id="teamLenaDownes"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamLenaDownes"><img class="team-picture" src="images/team/Lena.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">Lena Downes</div><div class="team-expanded-role">Operations Co-Lead</div><div class="team-expanded-text">Lena is from Easton, Massachusetts and is a first year graduate student in the aerospace engineering department at MIT. She is also a Draper Fellow, working on her research collaboratively with both Ted Steiner of Draper Labs and Jon How of MIT???s Aerospace Controls Lab. Lena is researching terrain relative navigation in GPS-denied environments. She completed her undergraduate education at the University of New Hampshire???s mechanical engineering department in May of 2018. As an undergraduate, Lena was heavily involved in UNH???s Engineers Without Borders chapter, traveling with the team to implement a water filtration system in San Pedro de Casta, Peru and serving as the chapter secretary. Lena loves running, cooking and listening to podcasts.</div></div></div><div class="row team-expanded-bio"><span class="anchor" id="teamZoeWolszon"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamZoeWolszon"><img class="team-picture" src="images/team/Zoe.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">Zoe Wolszon</div><div class="team-expanded-role">Operations Co-Lead</div><div class="team-expanded-text">Zoe is a Leaders for Global Operations Fellow in the class of 2020, pursuing a dual degree in management (MBA) from MIT Sloan and SM in Electrical Engineering and Computer Science from MIT. She is passionate about leveraging technology and social innovation to improve healthcare around the world. Before graduate school, she taught English in South Korea as a Fulbright grantee, worked as a management consultant at The Boston Consulting Group in San Francisco, and led an internal transformation at the International Vaccine Institute in Seoul. Zoe is a native of Austin, Texas and a proud Tar Heel and Morehead-Cain Scholar. In her spare time, she is an avid traveler, outdoor enthusiast, and a major foodie.</div></div></div>
<div class="row team-expanded-bio"><span class="anchor" id="teamKyleBranchesi"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamKyleBranchesi"><img class="team-picture" src="images/team/Kyle.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">Kyle Branchesi</div><div class="team-expanded-role">Media Team: Design</div><div class="team-expanded-text">Kyle is a design researcher in the department of architecture at MIT and currently works within the MIT Self-Assembly Lab. He has worked as a designer for the Garage Museum of Contemporary Art in Moscow Russia, as an architect for His Highness Sheikh Hamdan, The Crown Prince of Dubai, and as a project manager in Shanghai China. He has a Bachelor of Architecture from the Southern California Institute of Architecture and has studied at Universit??t f??r angewandte Kunst Wien in Austria. His work has been exhibited at the Venice Biennale in Italy, The Victoria &amp; Albert Museum in London, The Royal Danish Academy of Fine Arts in Denmark and the Pompidou Center in Paris.</div></div></div>
<div class="row team-expanded-bio"><span class="anchor" id="teamPramodaKarnati"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamKyleBranchesi"><img class="team-picture" src="images/team/Pramoda.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">Pramoda Karnati</div><div class="team-expanded-role">Media Team: Web</div><div class="team-expanded-text">Pramoda is a third year undergraduate student studying Computer Science and Engineering at MIT. She has an interest in the intersection of computer science and human-computer interaction as well as medical technology, assistive technology, and international development. Pramoda is also interested in entrepreneurship and one day hopes to pursue her own venture. She has previously interned at Apple and Brain Power and performed research at MIT Media Lab and CSAIL.</div></div></div>
<div class="row team-expanded-bio"><span class="anchor" id="teamRachelBellisle"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamRachelBellisle"><img class="team-picture" src="images/team/Rachel.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">Rachel Bellisle</div><div class="team-expanded-role">Media Team: Social</div><div class="team-expanded-text">Rachel is a 1st year graduate student in Medical Engineering and Medical Physics at the Harvard-MIT Health Science and Technology Program and is also a Draper Fellow. She is from Exeter, RI and completed her undergraduate degree from the University of Rhode Island. Broadly, she is interested in assistive devices, neuroengineering, and biomechanics. Through the Bioastronautics Training Program, she hopes to work with assistive technologies that are applicable in both space applications and medical applications on Earth.</div></div></div>
<div class="row team-expanded-bio"><span class="anchor" id="teamJShelly"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamJShelly"><img class="team-picture" src="images/team/J.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">J Shelly</div><div class="team-expanded-role">External Relations</div><div class="team-expanded-text">J is an undergraduate studying biology and has primarily worked in cancer research labs across the US and in Berlin. They are interested in entrepreneurship and innovation at the intersections of biotech and edtech. They are passionate about social justice and equality. J hopes to found a startup in the future that has a positive impact on marginalized populations around the globe.</div></div></div></div>
-->
<?php
    include('templates/footer.php');
?>
