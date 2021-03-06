<?php 
$pageTitle="Greg DiPietro";
$caption = "Front end developer";

$path = $_SERVER['DOCUMENT_ROOT'];
$head = $path . "/partials/head.php";
$nav =  $path . "/partials/interiorNav.php";
$pag =  $path . "/partials/interiorPag.php";

$criticalCSS = file_get_contents($path . "/assets/css/critical/work.css");
include_once($head);
?>

<body itemscope itemtype="http://schema.org/Person">
	<?php include_once($nav); ?>

	<div class="container">
		<div class="main_interior layout_resume" role="main">
			<article> 
				<header class="resume_section">
					<h2>About</h2>
				</header>
				<section class="resume_body">
					<p>
						A problem solver and critical thinker that has the users' interest first. My expertise in front end development and interaction design pair with a wide array of technical and communication skills. I've been building and honing my craft for over 10 years. 
						My latest obsession is making web pages 
						<a href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Fhardboiledgregs.com%2F">
							<em>fast.</em>
						</a>
					</p>
					<p class="resume_contact">
						<span class="tel" itemprop="telephone">
							<label>Phone:</label> (724) 689-2427
						</span>
						<span class="email" itemprop="email">
							<label>Email:</label> 
							<a href="mailto:gjdipietro@gmail.com">gjdipietro@gmail.com</a>
						</span>
					</p>

					<h3>Core Competencies</h3>
					<ul class="last module_ListBorder">
						<li>Responsive, mobile first, front end development</li>
						<li>User experience and interaction design</li>
						<li>HTML / CSS / JavaScript</li>
					</ul>
				</section>
			</article>

			<article>
				<header class="resume_section">
					<h2>Work Experience</h2>
				</header>
				<section class="resume_body">
					<!--SCHRAMM FARMS -->
					<header class="clearfix">
						<h3>Front End Developer</h3>
						<h4 class="resume_subTitle">
							Guru.com <span aria-hidden="true">/</span> <time datetime="2013-09-01">May 2013</time> to <time>Present</time>
						</h4>
					</header>
					<ul>
						<li>Implemented new features from concept through release</li>
						<li>Manage and maintain user controls and user interfaces</li>
						<li>Maintain all CSS throughout the application (SMACSS methodology)</li>
						<li>Develop reusable Sass modules and layouts</li>
						<li>Led research, design and development of a consistent look and feel to create a more usable and engaging product</li>
						<li>Support application through bug fixes</li>
					</ul>

					<!--SCHRAMM FARMS -->
					<header class="clearfix">
						<h3>Web Developer</h3>
						<h4 class="resume_subTitle">
							Schramm Farms &amp; Orchards (Freelance)
							<span aria-hidden="true">/</span> 
							<time datetime="2013-01-01">May 2013</time> to <time>Jan 2015</time>
						</h4>
					</header>
					<ul>
						<li>Researched and analyzed client's business and assessed requirements of the new system</li>
						<li>Conceptualized, designed and developed custom WordPress implementation</li>
						<li>Executed a, mobile first, responsive design</li>
					</ul>

					<!--USER INTERACTION ENGINEER -->
					<header class="clearfix">
						<h3>User Interaction Engineer</h3>
						<h4 class="resume_subTitle">
							Guru.com <span aria-hidden="true">/</span> 
							<time datetime="2009-09-01">Sep 2009</time>	to <time datetime="2013-09-01">Sep 2013</time>
						</h4>
					</header>
					<ul>
						<li>Collaborated with development team and marketing team in refining design, layouts, and functionality of the product</li>
						<li>Developed interactive prototypes of all new features in HTML / CSS / JavaScript </li>
						<li>Evaluated usability and practicality of all designs</li>
					</ul>
					

					<!--USABILITY ANALYST -->
					<header class="clearfix">
						<h3>Usability Analyst</h3>
						<h4 class="resume_subTitle">
							Guru.com <span aria-hidden="true">/</span> 
							<time datetime="2007-05-01">May 2007</time> to <time datetime="2009-09-01">Sep 2009</time>
						</h4>
					</header>
					<ul class="last">
						<li>Responsible for creation of business requirements documents</li>
						<li>Identified and prioritized user needs throughout the product</li>
						<li>Provided technical support to end users</li>
					</ul>
				</section>
			</article>

			<article>
				<header class="resume_section">
					<h2>Abilities</h2>
				</header>
				<section class="resume_body">
					<p>
						The 
						<a href="http://en.wikipedia.org/wiki/Dreyfus_model_of_skill_acquisition">Dreyfus Model of Skill Acquisition</a>
						was used to assess my abilities for the following skills. 
						<br> 
						(<abbr title="Competent">C</abbr>): Competent  <span aria-hidden="true"> / </span> 
						(<abbr title="Proficient">P</abbr>): Proficient <span aria-hidden="true"> / </span>  
						(<abbr title="Expert">E</abbr>): Expert
					</p>
					<ul class="resume_skills clearfix">
				        <li>
				        	<h3 class="h5">Front End</h3>
				          	<ul class="module_ListBorder">
				            	<li>Semantic HTML markup (<abbr title="Expert">E</abbr>)</li>
				            	<li>CSS3 via Sass & Compass (<abbr title="Expert">E</abbr>)</li>
				            	<li>JavaScript (jQuery, AngularJS) (<abbr title="Proficient">P</abbr>)</li>
				            	<li>Templating (Angular, Mustache) (<abbr title="Proficient">P</abbr>)</li>
				        	</ul>
				        </li>

				        <li>
				        	<h3 class="h5">Tooling</h3>
				          	<ul class="module_ListBorder">
				            	<li>Grunt (<abbr title="Proficient">P</abbr>)</li>
				            	<li>git (<abbr title="Proficient">P</abbr>)</li>
				            	<li>TFS (<abbr title="Proficient">P</abbr>)</li>
				            	<li>Command Line (<abbr title="Competent">C</abbr>)</li>
				        	</ul>
				        </li>

				        <li>
				        	<h3 class="h4">Back end development</h3>
				          	<ul class="module_ListBorder">
				            	<li>Firebase (<abbr title="Proficient">P</abbr>)</li>
				            	<li>Node (NPM) (<abbr title="Competent">C</abbr>)</li>
				            	<li>Express (<abbr title="Competent">C</abbr>)</li>
				            	<li>.Net (<abbr title="Competent">C</abbr>)</li>
				            	<li>PHP (<abbr title="Competent">C</abbr>)</li>
				        	</ul>
				        </li>

				        <li>
				        	<h3 class="h4">Design</h3>
				          	<ul class="module_ListBorder">
				            	<li>Interface Design (<abbr title="Expert">E</abbr>)</li>
				            	<li>User Interaction (<abbr title="Expert">E</abbr>)</li>
				            	<li>Site Planning (<abbr title="Expert">E</abbr>)</li>
				            	<li>Graphic Design (logos, assets) (<abbr title="Competent">C</abbr>)</li>
				            	<li>Typography (<abbr title="Competent">C</abbr>)</li>
				        	</ul>
				        </li>

				        <li>
				        	<h3 class="h4">Software</h3>
				          	<ul class="module_ListBorder">
				            	<li>SublimeText (<abbr title="Expert">E</abbr>)</li>
				            	<li>Adobe Fireworks (<abbr title="Proficient">P</abbr>)</li>
				            	<li>Visual Studio (<abbr title="Proficient">P</abbr>)</li>
				            	<li>Github (<abbr title="Proficient">P</abbr>)</li>
				        	</ul>
				    	</li>
				    </ul>

					
				</section>
			</article>

			<article>
				<header class="resume_section">
					<h2>Education</h2>
				</header>
				<section class="resume_body">
					<header class="clearfix">
						<h3>Bachelor of Information Science </h3>
						<h4 class="resume_subTitle">
							University of Pittsburgh
							<span aria-hidden="true"> / </span>
							<time datetime="2007-05-01">May 2007</time>
						</h4>
					</header>	
					<div></div>
					<div>Graduated Magna Cum Laude</div>
				</section>
			</article>

			<article>
				<header class="resume_section">
					<h2>Conferences</h2>
				</header>
				<section class="resume_body">
					<ul>
						<li>Web Design Day 2012 &amp; 2013</li>
						<li>Build Right Workshops by Sparkbox</li>
						<li>UXPittsburgh Meetups</li>
						<li>Refresh Pittsburgh gatherings</li>
					</ul>
				</section>
			</article>

			<article>
				<header class="resume_section">
					<h2>Download</h2>
				</header>
				<section class="resume_body">
					Hope we can chat soon!
					<a href="/assets/Greg_DiPietro_Resume.pdf">Get the .pdf</a>
				</section>
			</article>
		</div>
	</div>

</body>
</html>
