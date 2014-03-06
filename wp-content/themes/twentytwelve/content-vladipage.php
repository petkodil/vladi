<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header style="float: left;width: 500px;" class="entry-header">
			<h1 style="float: left;background: url('wp-content/themes/twentytwelve/images/main_brg.jpg') repeat;padding-right: 20px;" class="entry-title"><?php the_title(); ?></h1>
		</header>
		<header style="float: left;width: 480px;" class="entry-header">
			<h1 style="float: left;margin-left: 95px;padding: 0 20px;background: url('wp-content/themes/twentytwelve/images/main_brg.jpg') repeat;" class="entry-title">
			<?php
				$my_id = 14;
				$post_id_14 = get_post($my_id);
				$title = $post_id_14->post_title;
				echo $title;
			?>
			</h1>
		</header>
		<div style="clear:both;"></div>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				$my_id = 14;
				$post_id_14 = get_post($my_id);
				$content = $post_id_14->post_content;
				$content = apply_filters('the_content', $content);
				$content = str_replace(']]>', ']]>', $content);
				echo $content;
			?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
