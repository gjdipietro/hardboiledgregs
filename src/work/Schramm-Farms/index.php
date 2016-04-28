<?php 
$pageTitle="Schramm Farms &amp; Orchards";
$caption = "An end to end solution for a local farm";
$link = "http://www.schrammfarms.com/";
$heroImage = "schramm";
$active = 3;
$path = $_SERVER['DOCUMENT_ROOT'];
$head = $path . "/partials/head.php";
$nav =  $path . "/partials/interiorNav.php";
$pag =  $path . "/partials/interiorPag.php";
$criticalCSS = file_get_contents($path . "/assets/css/critical/work.css");
include_once($head);
?>

<body>
  	
	<?php include_once($nav);?>

	<div class="container">
	  <div class="main_interior" role="main">

	      <article class="typographic_content">
		      <h2>Project Overview</h2>
		      <p>
		      	Schramm Farms needed a website solution to modernize their brand and allow 
		      	their employees to create and share content with their customers.  
		      	The design we came up with used striking visuals to show off the farm. 
		      </p>
		      <p>
		      	WordPress was a perfect fit for the client.  Their content creators are able
		      	to choose from several custom post types to show off their products and events.
		      </p>
		      



	      </article>


	      <article class="typographic_content">
	      	  <h2>Responsibility</h2>
		      
		      <ul>
			  	<li>HTML</li>
			    <li>SCSS</li>
			    <li>Javascript</li>
			    <li>Responsive Design</li>
			    <li>WordPress</li>
			    <li>Content Strategy</li>
			    <li>Design</li>
			  </ul>

		  </article>      
	  </div>
	</div>
	<?php include_once($pag);?>


</body>
</html>
