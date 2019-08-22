<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-content">
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->


	<div class="entry-content">
		<div class="itemBlock">yo
		<?php

		?>
		</div>
	</div>



</article><!-- #post-<?php the_ID(); ?> -->
