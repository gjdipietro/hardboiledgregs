<?php 
$pageTitle="Greg DiPietro - Front End Developer";
$path = $_SERVER['DOCUMENT_ROOT'];
$pag =  $path . "/partials/interiorPag.php";
$head = $path . "/partials/head.php";
$criticalCSS = file_get_contents($path . "/assets/css/critical/home.css");
include_once($head);
?><body><div class="curtain" id="curtain"></div><div class="container"><div class="clearfix"><div class="header" id="header"><a href="/" class="eggatar"><img src="/assets/img/hi.jpg" alt="Meet Greg"></a><h1>Meet Greg</h1><h3 class="tagline accent">A front end developer and advocate of a fast &amp; easy to use web.</h3><ul class="social"><li><a href="https://twitter.com/HardBoiledGregs" title="View on Twitter" class="icon-twitter"></a></li><li><a href="https://github.com/gjdipietro" title="View on Github" class="icon-github"></a></li><li><a href="https://www.linkedin.com/pub/greg-dipietro/4/700/439" title="View on Linkedin" class="icon-linkedin"></a></li><li><a href="https://www.facebook.com/gjdipietro" title="View on Facebook" class="icon-facebook"></a></li></ul><a href="/about/" role="button" class="module_btn btn_primary" id="learnMore">More Info</a><div class="aboutMe"><span class="closeModal" id="closeModal">X</span><div class="typographic_content"><p>With over 30 billion pins to explore, it’s no wonder that Pinterest was one of the top requested apps from our amazing community. We listened to you and it’s finally here. Now, along with your Twitter, Facebook, blog apps, and so much more, you can add your Pinterest profile to your page and give your friends and followers a quick and easy way to preview your latest pins.</p><h2>Find out even more</h2><p>Hello hiring manager, I'd love to get in touch, here is a <a href="/resume/">Resume</a></p><h2>Lets get cracking</h2><p>view some of the work i have done.</p></div></div></div><div class="main" data-role="main" id="main"><h2>A few projects that show what I do.</h2><ul class="module_grid clearfix"><li><a href="/work/Guru-Profile"><img src="/assets/img/work/profile.png" alt="Guru.com Profile" title="Guru.com Profile"><div class="grid_title"><h3>Guru.com Hiring System</h3><p>Design, Content Strategy</p></div></a></li><li><a href="/work/Guru-Manage"><img src="/assets/img/work/manage.png" alt="Guru.com Manage" title="Guru.com Manage"><div class="grid_title"><h3>Guru.com Manage System</h3><p>Front end development</p></div></a></li><li><a href="/work/Schramm-Farms"><img src="/assets/img/work/schramm.png" alt="Schramm Farms &amp; Orchards" title="Schramm Farms &amp; Orchards"><div class="grid_title"><h3>Schramm Farms &amp; Orchards</h3><p>A Wordpress solution</p></div></a></li><li><a href="/work/You-Could-Use-A-Drink"><img src="/assets/img/work/ycuad.png" alt="You Could Use A Drink" title="You Could Use A Drink"><div class="grid_title"><h3>You Could Use a Drink</h3><p>An AngularJs side project</p></div></a></li></ul></div></div></div><div class="footerWrap"><?php include_once($pag); ?></div><script type="text/javascript">'use strict';


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
    //overlay.remove();
}

function aboutMe(event) {
    event.preventDefault();
    if (body.className === "showTime") {
        destroyOverlay();
    } else {
        addOverlay();
    }
}</script></body>