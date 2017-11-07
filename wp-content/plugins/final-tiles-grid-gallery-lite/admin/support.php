<?php if(preg_match('#' . basename(__FILE__) . '#', $_SERVER['PHP_SELF'])) { die(_e('You are not allowed to call this page directly.','final-tiles-gallery')); } ?>
<?php $ftg_subtitle = "Support" ?>
<?php include "header.php" ?>


<div class="container">        
    <div class="row">
	    <div class="section s12 m12 l12 col" id="support-page">
			<p>
				<strong><?php _e('Having problems with the plugin? No panic, our support is quite fast and reliable!','final-tiles-gallery')?></strong>
			</p>		
			<p>
				<?php _e('To get a fast solution you should fill a support ticket on our platform, before that')?> <strong><?php _e('prepare these basic but important informations','final-tiles-gallery')?></strong>:
			</p>
			<ul>
				<li><?php _e('URL of the page with the gallery;','final-tiles-gallery')?></li>
				<li><?php _e('describe the problem you are experiencing;','final-tiles-gallery')?></li>
				<li><?php _e('browser and operating system used.','final-tiles-gallery')?></li>
			</ul>
			<p>
				<?php _e('Another great help from you would be doing a couple of tests, try these simple operations and let us know the results:','final-tiles-gallery')?> 
			</p>
			<ul>
				<li><?php _e("Switch to the default WordPress theme and look if the problem is still there, if not we'll already know that the problem is related to your theme and we can be faster solving the issue;",'final-tiles-gallery')?></li>
				<li><?php _e('See if the problem is repeatable, also on another computers.','final-tiles-gallery')?></li>
			</ul>
			<p><strong><?php _e("The more complete these informations are, the faster we'll be our response",'final-tiles-gallery')?></strong><?php _e('(time zone permitting), thanks!','final-tiles-gallery')?></p>
			<p class="buttons">
				<a class="right waves-effect waves-light btn" href="http://greentreelabs.ticksy.com" target="_blank"><i class="mdi-content-send right"></i> <?php _e('Go to GreenTreeLabs support platform','final-tiles-gallery')?> </a>
			</p>
	    </div>
	</div>
</div>
