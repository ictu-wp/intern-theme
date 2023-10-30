<?php get_header(); ?>
<main class="mt-6">
	<?php if ( is_active_sidebar( 'front-sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'front-sidebar' ); ?>
	<?php endif; ?>
	<?php the_content(); ?>
</main>
<?php get_footer(); ?>
