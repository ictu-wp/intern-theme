<?php get_header(); ?>
<main class="mt-6">
	<?php if ( is_active_sidebar( 'front-sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'front-sidebar' ); ?>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
