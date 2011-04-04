<?php if (!is_single()):?>
		<?php while ( have_posts() ) : the_post(); ?>
		<h3>
			<a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
		</h3>
		<h4>
		  Posted on <?php the_time('l, F jS, Y') ?>
		</h4>
		<p>
			<?php the_excerpt(); ?>
		</p>
	<br/>
		<p> Filed under <?php the_category(', ') ?> </p>
				<h4>
					<a class='read-more' href='<?php the_permalink(); ?>'>more... </a>
				</h4>
		<?php endwhile; ?>
<?php else:?>
	<?php while ( have_posts() ) : the_post(); ?>
	<h3>
		<a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
	</h3>
	<h4>
	  Posted on <?php the_time('l, F jS, Y') ?>
	</h4>
	<p>
		<?php the_content(); ?>
	</p>
	<br/>
	<p> Filed under <?php the_category(', ') ?> </p>
			<h4>
				<a class='read-more' href='<?php the_permalink(); ?>'>more... </a>
			</h4>
	<?php endwhile; ?>
<?php endif; ?>