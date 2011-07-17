<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_header(); ?>

<body id="index" onload="">
<div id="wrapper">
	<div id="header">
		<h1 id="jon_busby">Jon Busby</h1>
		<div id='social'>
			<ul>
				<li id='twitter'>
					<a id='twitter-sprite' href='http://www.twitter.com/busbyjon'></a>
					<h2>Twitter</h2>
					<p>twitter.com/busbyjon</p>
				</li>
				<li id='linkedin'>
					<a id='linkedin-sprite' href='http://www.linkedin.com/in/jonbusby'></a>
					<h2>Linked In</h2>
					<p>linkedin.com/jonbusby</p>
				</li>
				<li id='email'>
					<a id='email-sprite' href='mailto:busbyjon@gmail.com'></a>
					<h2>Email</h2>
					<p>busbyjon@gmail.com</p>
				</li>
			</ul>
		</div>
	</div>
	<div id="main">
		<div id="content">
		
      <?php get_template_part( 'loop', 'index' ); ?>
      
		</div>
		<div id="sidebar">
		
      <?php get_sidebar(); ?>
      
		</div>
	</div>
	<div id="footer">
	
	<?php get_footer(); ?>

	</div>
</div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>

