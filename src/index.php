<?php 
$pageTitle="Greg DiPietro - Front End Developer";
$path = $_SERVER['DOCUMENT_ROOT'];
$pag =  $path . "/partials/interiorPag.php";
$head = $path . "/partials/head.php";
$criticalCSS = file_get_contents($path . "/assets/css/critical/home.css");
include_once($head);
?>

<body class="showTime">
    <div class="curtain" id="curtain"></div>
	<div class="container" >
        <div class="header" id="header">
            <a href="/" class="eggatar">
    	      <img src="/assets/img/hi.jpg" alt="Meet Greg" />
    	    </a>
    	    <h1>Meet Greg</h1>
    	    <h3 class="tagline accent">
    	      A front end developer and advocate of a fast &amp; easy to use web.
    	    </h3>
            
    	    <ul class="social">
    	      <li><a href="https://twitter.com/HardBoiledGregs" title="View on Twitter" class="icon-twitter"></a></li>
    	      <li><a href="https://github.com/gjdipietro" title="View on Github" class="icon-github"></a></li>
    	      <li><a href="https://www.linkedin.com/pub/greg-dipietro/4/700/439"  title="View on Linkedin" class="icon-linkedin"></a></li>
    	      <li><a href="https://www.facebook.com/gjdipietro" title="View on Facebook" class="icon-facebook"></a></li>
    	    </ul>
    	</div>

    	<div class="typographic_content" data-role="main" id="main">
            <p>
                I believe the web we build should be versatile and efficient, kind of like an egg. 
                I'm Greg DiPietro, a web designer and front end developer. 
                I help to build a performant, and device agnotistic websites. 
                Over 5 years experience translating orginizational UX goals into best-practice reusable HTML, 
                CSS, and JavaScript assets. If you are interested in learning more about Work-Greg have 
                a look at my <a href="/resume/">resume</a>.                            
            </p>
            
            <h2> Lets get cracking </h2>
            <p>
                I'd love to share some of the interesting projects I've worked on, like that time I created a never ending supply of <a href="/work/You-Could-Use-A-Drink">whiskey</a>.
            </p>

            <ul class="module_grid clearfix">
              <li>
                <a href="/work/Guru-Profile">
                  <img src="/assets/img/work/profile.png" alt="Guru.com Profile" title="Guru.com Profile" />
                  <div class="grid_title">
                    <h3>Guru.com Hiring System</h3>
                    <p>Responsive Design, Content Strategy</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="/work/Guru-Manage">
                  <img src="/assets/img/work/manage.png" alt="Guru.com Manage" title="Guru.com Manage"/>
                  <div class="grid_title">
                    <h3>Guru.com Manage System</h3>
                    <p>Style guide, front end system</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="/work/Schramm-Farms">
                  <img src="/assets/img/work/schramm.png" alt="Schramm Farms &amp; Orchards" title="Schramm Farms &amp; Orchards" />
                  <div class="grid_title">
                    <h3>Schramm Farms &amp; Orchards</h3>
                    <p>A Wordpress solution</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="/work/You-Could-Use-A-Drink">
                  <img src="/assets/img/work/ycuad.png" alt="You Could Use A Drink" title="You Could Use A Drink" />
                  <div class="grid_title">
                    <h3>You Could Use a Drink</h3>
                    <p>An AngularJs side project</p>
                  </div>
                </a>
              </li>
            </ul>

            <p>
                Hope we can chat more about these projects and any others soon.
                <a href="http://youcoulduseadrink.com/#/drink/-JmiH202_SlerQ3qaJ5k/1">First one is on me.</a>
            </p>
        </div>
	</div>

</body>
</html>































