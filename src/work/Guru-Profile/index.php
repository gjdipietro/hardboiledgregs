<?php 
$pageTitle="Guru.com Hiring System";
$caption = "The largest and most exciting project I've ever worked on.";
$link = "http://www.guru.com/freelancers/kit-oliynyk";
$heroImage = "profile";
$active = 1;
$path = $_SERVER['DOCUMENT_ROOT'];
$head = $path . "/partials/head.php";
$nav =  $path . "/partials/interiorNav.php";
$pag =  $path . "/partials/interiorPag.php";

$criticalCSS = file_get_contents($path . "/assets/css/critical/work.css");
include_once($head);
?>

<body>

  <?php include_once($nav); ?>

  <div class="container">
    <div class="main_interior" role="main">
      <article class="typographic_content">
        <h2>So Much More Than A Profile</h2>
        <p>
          This was a complete overhaul for Guru.  We weren't just reskinning the profile.  
          We rearchitected the profile, built a hub for creating the new content, 
          and a search to extract and view all that data.
        </p>

        <h2>Backstory</h2>
        <p>
          I'll just come out and say it.  The legacy system was bad.   
          To market yourself on Guru you would need to create a different profile for all 
          of your skills.  Meaning, an ad agency on Guru would need to create a separate profile
          for Development, Design, Copywriting, and Branding.  The users hated it.
        </p>
        <p>
          We came up with a service based model, where users had one profile and could market as many 
          services as they wanted.  This meant Freelancers could get as creative, or specific, 
          or as generic as they wanted.  They could sell themselves however they felt was best.
        </p>
        <figure class="module_figure">
          <img src="/assets/img/work/profile-services-small.png" 
            srcset="/assets/img/work/profile-services-small.png 600w, 
                    /assets/img/work/profile-services.png 1280w" 
                    alt="A list of Services" title="A list of Services">
          <figcaption>A list of services on a profile</figcaption>
        </figure>
        <p>
          The service object could also be stuffed with skills, 
          portfolio pieces, and feedback. All of which could be viewed independently on the profile.  
          Users have created over <strong>3 million</strong> services in a year and a half.
        </p>

        <h2>Searching on Guru</h2>
        <p>
          None of this matters without a search to bring it all together. 
          In the new model, users search for services, instead of freelancers.  
        </p>

        <h2>Responsibility</h2>
        <ul>
          <li>Content Strategy</li>
          <li>User Interaction</li>
          <li>Functional Prototype</li>
          <li>Validating Proof of concepts</li>
          <li>Interface Design</li>
          <li>HTML and CSS</li>
          <li>Responsive Design</li>
          <li>Bug fixing</li>
        </ul>
      </article>
    </div>
  </div>
  <?php include_once($pag); ?>


</body>
</html>
