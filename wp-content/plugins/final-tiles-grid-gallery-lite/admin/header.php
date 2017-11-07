<?php 

	$colors = array('indigo', 'blue', 'cyan', 'teal' ,'green', 'lime', 'amber', 'deep-orange');

?>
<header id="top">
	<h1 class="header center-on-small-only">Final Tiles Grid Gallery <small><?php print FTGVERSION ?></small></h1>	
	<h4 class="center-on-small-only"><?php print $ftg_subtitle ?></h4>
</header>
<?php
    if ( ftg_fs()->is_not_paying() ) {
        echo '<a class="upgrade-call" href="' . ftg_fs()->get_upgrade_url() . '">' .
            __('Upgrade Now!', 'final-tiles-grid-gallery-lite') .
            '</a>';
        echo '
    </section>';
    }
?>
