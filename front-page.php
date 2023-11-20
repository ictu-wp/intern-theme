<?php get_header(); ?>
<main class="mt-6">
	<div class="flex-wrap px-2 md:px-20 flex flex-row gap-4 md:flex-nowrap">
		<div class="w-full md:basis-3/4 grow-0 shrink-0 rounded-lg overflow-auto">
			<?php the_content(); ?>
		</div>
		<div class="grow flex flex-col gap-4">
			<?php if ( is_active_sidebar( 'frontpage-right' ) ) : ?>
				<?php dynamic_sidebar( 'frontpage-right' ); ?>
			<?php endif; ?>
		</div>
	</div>
	<?php if ( is_active_sidebar( 'front-sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'front-sidebar' ); ?>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
