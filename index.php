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
					<a id='linkedin-sprite' href='http://www.linkedin.com/busbyjon'></a>
					<h2>Linked In</h2>
					<p>linkedin.com/busbyjon</p>
				</li>
				<li id='email'>
					<a id='email-sprite' href='mailto:jon@jonbusby.co.uk'></a>
					<h2>Email</h2>
					<p>jon@jonbusby.co.uk</p>
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
</body>
</html>

