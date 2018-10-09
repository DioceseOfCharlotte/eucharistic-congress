<article <?php Hybrid\Attr\display( 'entry' ); ?>>

	<?php the_post_thumbnail( 'medium', [ 'class' => 'entry__image' ] ); ?>

	<header class="entry__header">
		<?php Hybrid\Post\display_title( [ 'class' => 'u-h4' ] ); ?>
	</header>

	<div class="entry__summary">
		<?php the_excerpt(); ?>
	</div>

</article>
