<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header("home"); ?>

	<div id="primary" class="site-content">
		<div class="top_slogan">
			Правни <span style="color:#ff8901">консултации</span> и процесуално <span style="color:#ff8901">представителство</span>
		</div>
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'vladipage' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
		<?php query_posts(array('showposts' => 3, 'post_parent' => 4, 'post_type' => 'page', 'order'=>'ASC')); 
		$i=1;
		while (have_posts()) {
				$i++;
				the_post(); 
				$permalink = get_permalink($post->ID);?>
				
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
		<?php } ?>
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>