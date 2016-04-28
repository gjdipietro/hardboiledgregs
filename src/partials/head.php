<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $pageTitle ?></title>
  <!-- favicons -->
  <link rel="shortcut icon" href="/assets/img/favicon/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicon/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicon/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/favicon/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicon/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicon/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicon/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="/assets/img/favicon/favicon-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/assets/img/favicon/favicon-160x160.png" sizes="160x160">
  <link rel="icon" type="image/png" href="/assets/img/favicon/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/assets/img/favicon/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="/assets/img/favicon/favicon-32x32.png" sizes="32x32">
  <meta name="msapplication-TileColor" content="#ffc40d">
  <meta name="msapplication-TileImage" content="/assets/img/favicon/mstile-144x144.png">
  <meta name="msapplication-config" content="/assets/img/favicon/browserconfig.xml">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Greg DiPietro">
  <meta name="description" content="Greg DiPietro is a front end developer, UXer, and designer that cares about the people who use what he makes." >
  <meta name="keywords" content="Responsive web designer, mobile, web designer, UX, UI, web development, web development, information architect, content strategist, pittsburgh, pennsylvania, rwd, front end developer" >
  
  <!-- Load criticla css -->
  <style> 
    <?php echo $criticalCSS; ?> 
  </style>

  <!-- fonts -->
  <script>
  (function(d) {
    var config = {
      kitId: 'bao5czj',
      scriptTimeout: 3000
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
  </script>

  <!-- load production js and css -->
  <script>
    function loadJS(src) {"use strict";var ref = window.document.getElementsByTagName( "script" )[ 0 ];var script = window.document.createElement( "script" );script.src = src;ref.parentNode.insertBefore( script, ref );return script;}
    function loadCSS(e,t,n){"use strict";var i=window.document.createElement("link");var o=t||window.document.getElementsByTagName("script")[0];i.rel="stylesheet";i.href=e;i.media="only x";o.parentNode.insertBefore(i,o);setTimeout(function(){i.media=n||"all"})}
    loadJS("/assets/js/production.min.js");
    loadCSS("/assets/css/styles.css");
  </script>

  <!-- svg icons -->
  <script>
    /* grunticon Stylesheet Loader | https://github.com/filamentgroup/grunticon | (c) 2012 Scott Jehl, Filament Group, Inc. | MIT license. */
    window.grunticon=function(e){if(e&&3===e.length){var t=window,n=!!t.document.createElementNS&&!!t.document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect&&!!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"),A=function(A){var o=t.document.createElement("link"),r=t.document.getElementsByTagName("script")[0];o.rel="stylesheet",o.href=e[A&&n?0:A?1:2],r.parentNode.insertBefore(o,r)},o=new t.Image;o.onerror=function(){A(!1)},o.onload=function(){A(1===o.width&&1===o.height)},o.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="}};
      grunticon([ "/assets/css/icons.data.svg.css", "/assets/css/icons.data.png.css", "/assets/css/icons.fallback.css" ] );
  </script>
  
  <noscript>
    <link rel="stylesheet" href="/assets/css/styles.css" >
    <link rel="stylesheet" href="/assets/css/icons.fallback.css" >
  </noscript>
  


</head>
