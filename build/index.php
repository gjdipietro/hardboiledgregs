<?php 
$pageTitle="Greg DiPietro - Front End Developer";
$path = $_SERVER['DOCUMENT_ROOT'];
$pag =  $path . "/partials/interiorPag.php";
$head = $path . "/partials/head.php";
$criticalCSS = file_get_contents($path . "/assets/css/critical/home.css");
include_once($head);
?><body><div class="curtain" id="curtain"></div><div class="container"><div class="clearfix"><div class="header" id="header"><a href="/" class="eggatar"><img src="/assets/img/hi.jpg" alt="Meet Greg"></a><h1>Meet Greg</h1><h3 class="tagline accent">A front end developer and advocate of a fast &amp; easy to use web.</h3><ul class="social"><li><a href="https://twitter.com/HardBoiledGregs" title="View on Twitter" class="icon-twitter"></a></li><li><a href="https://github.com/gjdipietro" title="View on Github" class="icon-github"></a></li><li><a href="https://www.linkedin.com/pub/greg-dipietro/4/700/439" title="View on Linkedin" class="icon-linkedin"></a></li><li><a href="https://www.facebook.com/gjdipietro" title="View on Facebook" class="icon-facebook"></a></li></ul><a href="/about/" class="module_btn btn_primary" id="learnMore">More Info</a><div class="aboutMe"><span class="closeModal" id="closeModal">X</span><div class="typographic_content"><p>I believe the web we build should be versatile and efficient, kind of like an egg. I'm Greg DiPietro, a web designer and front end developer. I help to build a performant, and device agnotistic websites. Over 5 years experience translating orginizational UX goals into best-practice reusable HTML, CSS, and JavaScript assets. If you are interested in learning more about Work-Greg have a look at my <a href="/resume/">resume</a>.</p><h2>Lets get cracking</h2><p>I'd love to share some of the interesting projects I've worked on. I architected the front end of a <a href="/work/Guru-Profile">responsive profile and search</a> to help you find and hire Freelancers on Guru.com. Or more recently, when I figured out what it would take to implement a <a href="/work/Guru-Manage">visual style guidelines</a> system with reusabe design patterns for our core product. Who can forget about when I helped <a href="/work/Schramm-Farms">small business</a> define their presence online. Or most importanlty, when I created a never ending supply of <a href="/work/You-Could-Use-A-Drink">whiskey</a>.</p><p>Hope we can chat more about these projects and any others soon. <a href="http://youcoulduseadrink.com/#/drink/-JmiH202_SlerQ3qaJ5k/1">First one is on me.</a></p></div></div></div><div class="main" data-role="main" id="main"><h2>A few projects I'd like to talk about.</h2><ul class="module_grid clearfix"><li><a href="/work/Guru-Profile"><img src="/assets/img/work/profile.png" alt="Guru.com Profile" title="Guru.com Profile"><div class="grid_title"><h3>Guru.com Hiring System</h3><p>Responsive Design, Content Strategy</p></div></a></li><li><a href="/work/Guru-Manage"><img src="/assets/img/work/manage.png" alt="Guru.com Manage" title="Guru.com Manage"><div class="grid_title"><h3>Guru.com Manage System</h3><p>Style guide, front end system</p></div></a></li><li><a href="/work/Schramm-Farms"><img src="/assets/img/work/schramm.png" alt="Schramm Farms &amp; Orchards" title="Schramm Farms &amp; Orchards"><div class="grid_title"><h3>Schramm Farms &amp; Orchards</h3><p>A Wordpress solution</p></div></a></li><li><a href="/work/You-Could-Use-A-Drink"><img src="/assets/img/work/ycuad.png" alt="You Could Use A Drink" title="You Could Use A Drink"><div class="grid_title"><h3>You Could Use a Drink</h3><p>An AngularJs side project</p></div></a></li></ul></div></div></div><script>'use strict';
var body        = document.body,
    header      = document.getElementById("header"), 
    main        = document.getElementById("main"),
    learnMore   = document.getElementById("learnMore"),
    curtain     = document.getElementById("curtain");

document.getElementById('learnMore').addEventListener('click', aboutMe, false);
document.getElementById('closeModal').addEventListener('click', destroyOverlay, false);

function addOverlay() {
    body.className = body.className + " showTime";
    learnMore.className += learnMore.className + " hidden";
}
function destroyOverlay() {
    body.className = "";
    learnMore.className = "module_btn btn_primary";
}
function aboutMe(event) {
    event.preventDefault();
    if (body.className === "showTime") {
        destroyOverlay();
    } else {
        addOverlay();
    }
}</script></body>