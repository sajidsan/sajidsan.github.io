<?php
/**
 * Fivepanel front page theme.
 *
 * @package WordPress
 * @subpackage Expand2Web SmallBiz
 * @since Expand2Web SmallBiz 3.3
 */
 
 $hideSidebar = true;
?>

<style>
#homepage-top-left img{margin-top:-1em;}
</style>

<!--[if IE 7]>
<style type="text/css">
#homepage-top-left{margin-top:15px;}
#homepage-top-right{margin-top:15px;}
</style>
<![endif]--> 
	
    
<div id="business" style="color:#<?php echo get_option('smallbiz_main_text_color') ?>;">

<div style="float:left"><img height="170" style="margin-right: 10px; margin-top:-2px;" src="<?php bloginfo('template_url'); ?>/images/<?php echo biz_option('smallbiz_fi_page_image')?>" alt="<?php echo biz_option('smallbiz_name')?>" title="<?php echo biz_option('smallbiz_name')?>" class="alignleft" />
</div>


<?php echo biz_option('smallbiz_five_main_text')?>

	
		</div>


<div id="home">


<div id="homepage-top-left">


<?php echo biz_option('smallbiz_five_business_video')?>

</div>

<div id="homepage-top-right">

<?php echo biz_option('smallbiz_five_right_text')?>

</div>

<div id="homepage-bottom-left">

<?php echo biz_option('smallbiz_five_left_bottom_text')?>

</div>

<div id="homepage-bottom-right">

<?php echo biz_option('smallbiz_five_right_bottom_text')?>


</div>

</div>
</div> 
