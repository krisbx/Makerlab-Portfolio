<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Minimalistblog Stories
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('posts-entry fbox'); ?>>
		<?php if ( has_post_thumbnail() ) : ?>
		<div class="featured-thumbnail">
			<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail('minimalistblogger-slider'); ?></a>
		</div>
	<?php endif; ?>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<div class="blog-data-wrapper">
				<div class="post-data-divider"></div>
				<div class="post-data-positioning">
					<div class="post-data-text">
						<?php minimalistblogger_posted_on(); ?>
					</div>
				</div>
			</div>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'minimalistblog-stories' ),
				'after'  => '</div>',
			) );
		?>

<?php if ( is_single() ) : ?>
		<div class="tag-cat-container">
			<span class="tag-cat-container-strings"><?php _e(' Category:', 'minimalistblog-stories' ); ?></span> <?php the_category('<span class="tag-cont">'.__(', ','minimalistblog-stories').'</span>',', ') ?>
		</div>
<?php endif; ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
