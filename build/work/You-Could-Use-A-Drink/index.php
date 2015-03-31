<?php 
$pageTitle="You Could Use A Drink";
$caption = "Share a drink with a friend";
$link = "http://www.youcoulduseadrink.com";
$heroImage = "ycuad";
$active = 4;
$path = $_SERVER['DOCUMENT_ROOT'];
$head = $path . "/partials/head.php";
$nav =  $path . "/partials/interiorNav.php";
$pag =  $path . "/partials/interiorPag.php";
$criticalCSS = file_get_contents($path . "/assets/css/critical/work.css");

include_once($head);
?><body><?php include_once($nav); ?><div class="container"><div class="main_interior" role="main"><article class="typographic_content"><p>You could use a drink is a pet project of mine. The idea is simple. You select a type of drink, write a short message, then share the result. It started modestly as a pen on <a href="http://codepen.io/gjdipietro/pen/LsgzB">Codepen</a>. When I got an email that one of my personal web heros, Chris Coyier, liked it I thought I had something to build on.</p><h2>Behind the Scenes</h2><p>All of the graphics on the site are built with CSS. While it may not exactly be practical, its a fun challenge to create the shapes and animations all in code. Since the drinks are built with CSS and coded in <code>EMS</code> I can scale them and reuse the same code for the selection step. It uses a firebase backend to persist the data so all the creations you make have a shareable URL.</p><h2>Relevant Skills</h2><ul><li>AngularJS</li><li>Scss</li><li>CSS Animations</li><li>Firebase</li></ul></article></div></div><?php include_once($pag); ?></body>