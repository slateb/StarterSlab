<?php get_header(); ?>
<div class="row">
<!-- Row for main content area -->
	<div class="small-12 large-12 columns" role="main">

	<?php if ( have_posts() ) : 
		 while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'parts/content', get_post_format() ); ?>

		<?php endwhile; ?>

		<?php else :  
			get_template_part( 'parts/content', 'none' ); 
		 endif; // end have_posts() check ?>


	<?php if ( function_exists( 'starterslab_pagination' ) ) { starterslab_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'starterslab' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'starterslab' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>
</div>
<?php get_footer(); ?>
