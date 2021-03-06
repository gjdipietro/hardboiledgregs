<div class="header_interior" role="header">
	<div class="container">
	    
	    <div class="header_title_wrap">
		    <a href="/" class="eggatar small">
		      <img src="/assets/img/hi-small.jpg" alt="Meet Greg" itemprop="image" />
		    </a>

		  	<header class="workTitle">   
		        <h1><?php echo $pageTitle ?></h1>
		        <h3 class="accent"><?php echo $caption ?></p>
		    </header>
	    </div>
	    
	    <?php if($heroImage) { ?>
	    <figure class="module_figure">
	        <img src="/assets/img/work/<?php echo $heroImage ?>-hero-small.png" 
	          srcset="/assets/img/work/<?php echo $heroImage ?>-hero-small.png 600w, 
	                  /assets/img/work/<?php echo $heroImage ?>-hero.png 1280w" 
	                  alt="<?php echo $pageTitle ?>" title="<?php echo $pageTitle ?>">
	      	<figcaption><a href="<?php echo $link ?>" target="_blank">View site</a></figcaption>
	    </figure>
	    <?php } ?>
	
	</div>
</div>