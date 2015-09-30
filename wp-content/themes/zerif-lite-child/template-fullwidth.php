<?php

/*
Template Name: Full Width Page
*/

get_header(); ?>

<?php
$img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
$img = $img[0];
?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->



	<div id="content" class="site-content">

<div class="container-fluid" id="drug_container" style="<?php if($img){echo 'background: url(' . $img . ')'; } ?>; background-size: contain;">



<div class="content-left-wrap col-md-12">

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">



			<?php while ( have_posts() ) : the_post(); ?>



				<?php get_template_part( 'content', 'page' ); ?>



				<?php

					// If comments are open or we have at least one comment, load up the comment template

					if ( comments_open() || '0' != get_comments_number() ) :

						comments_template();

					endif;

				?>



			<?php endwhile; // end of the loop. ?>



		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- .content-left-wrap -->




</div><!-- .container -->

<?php get_footer(); ?>
