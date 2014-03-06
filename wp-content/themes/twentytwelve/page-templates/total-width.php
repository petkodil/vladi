<?php
/**
 * Template Name: Total Page Template, No Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content" style="width:100%">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'inside' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php 
 $currentPost = $post->ID;
query_posts(array('showposts' => 4, 'post_parent' => 4, 'post_type' => 'page', 'order'=>'ASC')); 
		$i=1;
		while (have_posts()) {
				
				the_post(); 
				$permalink = get_permalink($post->ID);
				if ( $currentPost!=$post->ID&&$i<=3) {
				$i++;
				?>
				<div class="boxes_small" style="<?php echo($i==4?'margin-right: 0px;':'margin-right: 35px;'); ?>" >
					<div class="view view-first">
						<h2><a href="<?php echo $permalink; ?>" style="text-docoration:none;"><?php echo get_the_title($post->ID); ?></a></h2>
					   <div class="postim-cover">
							<a style="display:inline;" href="<?php echo $permalink; ?>"><?php echo get_the_post_thumbnail( $post->ID,'full', array('class'	=> "img-100",)); ?></a>
						</div>
						<div style="padding: 20px 0px;color: #554d40;line-height: 20px;height:70px;" class="mask">
							<p>
								<?php $page_data = get_page( $post->ID ); echo $page_data->post_excerpt; ?>
							</p>
						</div>
						<div style="float:right;">	 
							<a class="info" href="<?php echo $permalink; ?>">повече>></a>
						</div>
					</div>   
				</div>
		<?php } }?>
<?php get_footer(); ?>