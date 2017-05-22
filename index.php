
<?php get_header(); ?>
<!--TODO: places referance on the individual page on wordpess coding for custymise every page
<link rel="stylesheet" type="text/css" href="../wp-content/themes/Wp-101/CSS/style2.css">
and edit style2.css
-->
<!--Test css i places it in the individual page for custymise every page
<!--<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/style2.css">-->
	<h3> TESTING 123 </h3>
<?php if( have_posts() ):
							while( have_posts() ): the_post(); ?>

				 			<h3> <?php the_title(); ?> </h3>
							<p> <?php the_content(); ?> </p>

			 <?php endwhile;
			endif;
?>



<?php get_footer(); ?>
