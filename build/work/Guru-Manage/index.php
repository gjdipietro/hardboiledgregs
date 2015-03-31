<?php 
$pageTitle="Guru.com Manage System";
$caption = "Changing the way you work on Guru";
$link = "http://www.guru.com";
$heroImage = "manage";
$active = 2;
$path = $_SERVER['DOCUMENT_ROOT'];
$head = $path . "/partials/head.php";
$nav =  $path . "/partials/interiorNav.php";
$pag =  $path . "/partials/interiorPag.php";

$criticalCSS = file_get_contents($path . "/assets/css/critical/work.css");
include_once($head);
?><body><?php include_once($nav); ?><div class="container"><div class="main_interior" role="main"><article class="typographic_content"><h2>The "manage" project</h2><p>The project title had to be vague given the sheer size. The entire guts of the application were redesigned. The cornerstone of the effort was the Work Room Overview. After you're hired this view is exposed to the freelancer and employer. You can get status updates, track time, create a work contract, send messages, and handle payments. It doesn't look like much, which in the product world is something to be proud of, but there is a ton of functionality in there. I led the design efforts and did templating and controller logic in Angular.</p><figure class="module_figure"><img src="/assets/img/work/manage-ui.png" alt="A sample work room" title="A sample work room"><figcaption>A sample work room</figcaption></figure><h3>Invoices</h3><p>We used the UI router module to provide a quick transition between the list of all invoices and a specific invoice detail. The business requirements document had several different rules that would determine how the user would see the page. I translated the requirements into a sample JSON file that could power a working prototype. This sped up the development process as they only had to supply the real data.</p><figure class="module_figure"><img src="/assets/img/work/payments.png" alt="A sample invoices page" title="A sample invoices page"><figcaption>A sample invoices page</figcaption></figure><h2>Responsibilities</h2><ul><li>Designed &amp; developed modular approach to the look &amp; feel.</li><li>Defined business logic as defined in the spec doc.</li><li>Developed Angular templates: directives, router, controllers.</li><li>Wired up Angular services</li></ul></article></div></div><?php include_once($pag); ?></body>